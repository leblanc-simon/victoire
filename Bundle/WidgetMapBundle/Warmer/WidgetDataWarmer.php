<?php

namespace Victoire\Bundle\WidgetMapBundle\Warmer;

use Doctrine\Common\Annotations\Reader;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\PersistentCollection;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Victoire\Bundle\BusinessPageBundle\Entity\BusinessTemplate;
use Victoire\Bundle\CoreBundle\Entity\Link;
use Victoire\Bundle\CoreBundle\Entity\View;
use Victoire\Bundle\CoreBundle\Helper\ViewCacheHelper;
use Victoire\Bundle\PageBundle\Entity\Page;
use Victoire\Bundle\PageBundle\Entity\WidgetMap;
use Victoire\Bundle\WidgetBundle\Entity\Traits\LinkTrait;
use Victoire\Bundle\WidgetBundle\Entity\Widget;
use Victoire\Widget\ListingBundle\Entity\WidgetListing;
use Victoire\Widget\ListingBundle\Entity\WidgetListingItem;
use Victoire\Widget\MenuBundle\Entity\WidgetMenu;

/**
 * Link Warmer.
 * This class prepare all widgets with their links and medias for the current View to avoid queries during page rendering.
 *
 * ref: victoire_widget_map.widget_data_warmer
 */
class WidgetDataWarmer
{
    protected $reader;
    protected $viewCacheHelper;
    protected $em;
    protected $accessor;
    protected $manyToOneAssociations;

    /**
     * Constructor.
     *
     * @param Reader          $reader
     * @param ViewCacheHelper $viewCacheHelper
     * @param array           $manyToOneAssociations
     */
    public function __construct(Reader $reader, ViewCacheHelper $viewCacheHelper, array $manyToOneAssociations)
    {
        $this->reader = $reader;
        $this->viewCacheHelper = $viewCacheHelper;
        $this->accessor = PropertyAccess::createPropertyAccessor();
        $this->manyToOneAssociations = $manyToOneAssociations;
    }

    /**
     * Warm widgets, links and medias.
     *
     * @param EntityManager $em
     * @param View          $view
     */
    public function warm(EntityManager $em, View $view)
    {
        $this->em = $em;

        $widgetRepo = $this->em->getRepository('Victoire\Bundle\WidgetBundle\Entity\Widget');
        $viewWidgets = $widgetRepo->findAllWidgetsForView($view);

        $this->populateWidgets($view, $viewWidgets);

        $linkIds = $associatedEntities = [];
        $this->extractAssociatedEntities($viewWidgets, $linkIds, $associatedEntities);
        $this->setAssociatedEntities($associatedEntities);
        $this->setPagesForLinks($linkIds);
    }

    /**
     * Populate widgets in View's widgetMap.
     *
     * @param View     $view
     * @param Widget[] $viewWidgets
     */
    private function populateWidgets(View $view, array $viewWidgets)
    {
        foreach ($view->getWidgetMap() as $slotId => $widgetMapArray) {
            /* @var WidgetMap[] $widgetMapArray */
            foreach ($widgetMapArray as $widgetMap) {
                foreach ($viewWidgets as $viewWidget) {
                    if ($widgetMap->getWidgetId() == $viewWidget->getId()) {
                        $widgetMap->setWidget($viewWidget);
                        break;
                    }
                }
            }
        }
    }

    /**
     * Pass throw all widgets and ManyToOne relations to extract all missing associations.
     *
     * @param Widget[]|WidgetListingItem[] $entities
     * @param array                        $linkIds
     * @param array                        $associatedEntities
     */
    private function extractAssociatedEntities(array $entities, &$linkIds, &$associatedEntities)
    {
        foreach ($entities as $entity) {
            $reflect = new \ReflectionClass($entity);
            $properties = $reflect->getProperties();

            //If entity has LinkTrait, store the entity link id
            if ($this->hasLinkTrait($reflect) && ($entity instanceof Widget || $entity instanceof WidgetListingItem)) {
                /* @var $entity LinkTrait */
                if ($entity->getLink()) {
                    $linkIds[] = $entity->getLink()->getId();
                }
            }

            foreach ($properties as $property) {
                $annotations = $this->reader->getPropertyAnnotations($property);
                foreach ($annotations as $key => $annotationObj) {

                    //If entity has ManyToOne association, store them to construct a single query for each type
                    if ($annotationObj instanceof ManyToOne && in_array($annotationObj->targetEntity, $this->manyToOneAssociations)) {
                        if ($targetEntity = $this->accessor->getValue($entity, $property->getName())) {
                            $associatedEntities[$annotationObj->targetEntity][] = new AssociatedEntityToWarm(
                                $entity,
                                $property->getName(),
                                $targetEntity->getId()
                            );
                        }
                    }

                    //If current entity instanceof WidgetListing|WidgetListingItem|WidgetMenu and has children entities, pass throw childrens
                    if (($entity instanceof WidgetListing || $entity instanceof WidgetListingItem || $entity instanceof WidgetMenu)
                    && ($annotationObj instanceof OneToMany)) {

                        /* @var PersistentCollection $collection */
                        if ($collection = $this->accessor->getValue($entity, $property->getName())) {
                            $this->extractAssociatedEntities($collection->toArray(), $linkIds, $associatedEntities);
                        }
                    }
                }
            }
        }
    }

    /**
     * Set all missing associated entities.
     *
     * @param array $repositories
     */
    private function setAssociatedEntities(array $repositories)
    {
        foreach ($repositories as $repositoryName => $associatedEntitiesToWarm) {
            $idsToSearch = $this->extractAssociatedEntitiesIds($associatedEntitiesToWarm);
            $foundEntities = $this->em->getRepository($repositoryName)->findById(array_values($idsToSearch));

            /* @var AssociatedEntityToWarm[] $associatedEntitiesToWarm */
            foreach ($associatedEntitiesToWarm as $associatedEntityToWarm) {
                foreach ($foundEntities as $foundEntitie) {
                    if ($foundEntitie->getId() == $associatedEntityToWarm->getEntityId()) {
                        $inheritorEntity = $associatedEntityToWarm->getInheritorEntity();
                        $inheritorPropertyName = $associatedEntityToWarm->getInheritorPropertyName();
                        $this->accessor->setValue($inheritorEntity, $inheritorPropertyName, $foundEntitie);
                        break;
                    }
                }
            }
        }
    }

    /**
     * Set viewReferencePage for each link.
     *
     * @param array $linkIds
     */
    private function setPagesForLinks(array $linkIds)
    {
        $viewIdsForLinks = [];

        /* @var Link[] $links */
        $links = $this->em->getRepository('VictoireCoreBundle:Link')->findById($linkIds);

        foreach ($links as $link) {
            if ($link->getParameters()['linkType'] == 'viewReference') {
                $viewReference = $this->viewCacheHelper->getReferenceByParameters(['id' => $link->getParameters()['viewReference']]);

                if (!empty($viewReference['viewId'])) {
                    $viewIdsForLinks[$link->getId()] = $viewReference['viewId'];
                } elseif (!empty($viewReference['patternId'])) {
                    $viewIdsForLinks[$link->getId()] = $viewReference['patternId'];
                }
            }
        }

        /* @var Page[] $pages */
        $pages = $this->em->getRepository('VictoireCoreBundle:View')->findById($viewIdsForLinks);

        foreach ($links as $link) {
            $searchedLinkId = $link->getId();
            foreach ($viewIdsForLinks as $linkId => $pageId) {
                foreach ($pages as $page) {
                    if ($linkId == $searchedLinkId && $pageId == $page->getId()) {
                        if (!($page instanceof BusinessTemplate)) {
                            $link->setViewReferencePage($page);
                        }
                        break 2;
                    }
                }
            }
        }
    }

    /**
     * Check if reflection class has LinkTrait.
     *
     * @param \ReflectionClass $reflect
     *
     * @return bool
     */
    private function hasLinkTrait(\ReflectionClass $reflect)
    {
        $linkTraitName = 'Victoire\Bundle\WidgetBundle\Entity\Traits\LinkTrait';

        $traits = $reflect->getTraits();
        foreach ($traits as $trait) {
            if ($trait->getName() == $linkTraitName) {
                return true;
            }
        }

        if ($parentClass = $reflect->getParentClass()) {
            if ($this->hasLinkTrait($parentClass)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Extract entities ids from an array of AssociatedEntityToWarm.
     *
     * @param AssociatedEntityToWarm[] $associatedEntitiesToWarm
     *
     * @return array
     */
    private function extractAssociatedEntitiesIds(array $associatedEntitiesToWarm)
    {
        $extractedIds = [];
        foreach ($associatedEntitiesToWarm as $associatedEntityToWarm) {
            $extractedIds[] = $associatedEntityToWarm->getEntityId();
        }

        return $extractedIds;
    }
}
