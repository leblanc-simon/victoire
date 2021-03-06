<?php

namespace Victoire\Bundle\WidgetBundle\Controller;

use Exception;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Victoire\Bundle\BusinessPageBundle\Entity\BusinessTemplate;
use Victoire\Bundle\WidgetBundle\Entity\Widget;

/**
 * Widget Controller.
 */
class WidgetController extends Controller
{
    /**
     * Show a widget.
     *
     * @param Request $request
     * @param Widget  $widget
     * @param int     $viewReferenceId
     *
     * @Route("/victoire-dcms-public/widget/show/{id}/{viewReferenceId}", name="victoire_core_widget_show", options={"expose"=true})
     * @Template()
     * @ParamConverter("id", class="VictoireWidgetBundle:Widget")
     *
     * @throws Exception
     *
     * @return Response
     */
    public function showAction(Request $request, Widget $widget, $viewReferenceId)
    {
        //the response is for the ajax.js from the AppVentus Ajax Bundle
        try {
            $view = $this->container->get('victoire_page.page_helper')->findPageByParameters(['id' => $viewReferenceId]);
            $this->container->get('victoire_core.current_view')->setCurrentView($view);
            $response = new JsonResponse([
                    'html'    => $this->get('victoire_widget.widget_renderer')->render($widget, $view),
                    'update'  => 'vic-widget-'.$widget->getId().'-container',
                    'success' => false,
                ]
            );
        } catch (Exception $ex) {
            $response = $this->getJsonReponseFromException($ex);
        }

        return $response;
    }

    /**
     * API widgets function.
     *
     * @param string $widgetIds       the widget ids to fetch in json
     * @param int    $viewReferenceId
     *
     * @Route("/victoire-dcms-public/api/widgets/{widgetIds}/{viewReferenceId}", name="victoire_core_widget_apiWidgets", options={"expose"=true})
     *
     * @return JsonResponse
     */
    public function apiWidgetsAction($widgetIds, $viewReferenceId)
    {
        $view = $this->container->get('victoire_page.page_helper')->findPageByParameters(['id' => $viewReferenceId]);
        $response = [];
        $widgets = $this->get('doctrine.orm.entity_manager')->getRepository('VictoireWidgetBundle:Widget')
            ->findBy(['id' => json_decode($widgetIds)]);

        foreach ($widgets as $widget) {
            $response[$widget->getId()] = $this->get('victoire_widget.widget_renderer')->render($widget, $view);
        }

        return new JsonResponse($response);
    }

    /**
     * New Widget.
     *
     * @param string $type              The type of the widget we edit
     * @param int    $viewReference     The view reference where attach the widget
     * @param string $slot              The slot where attach the widget
     * @param int    $positionReference The positionReference in the widgetMap
     *
     * @return JsonResponse
     *
     * @Route("/victoire-dcms/widget/new/{type}/{viewReference}/{slot}/{positionReference}", name="victoire_core_widget_new", defaults={"slot":null}, options={"expose"=true})
     * @Template()
     */
    public function newAction($type, $viewReference, $slot = null, $positionReference = 0)
    {
        try {
            $view = $this->getViewByReferenceId($viewReference);
            $response = new JsonResponse($this->get('widget_manager')->newWidget(Widget::MODE_STATIC, $type, $slot, $view, $positionReference));
        } catch (Exception $ex) {
            $response = $this->getJsonReponseFromException($ex);
        }

        return $response;
    }

    /**
     * Create a widget.
     *
     * @param string $type              The type of the widget we edit
     * @param int    $viewReference     The view reference where attach the widget
     * @param string $slot              The slot where attach the widget
     * @param int    $positionReference Position of the widget
     * @param string $businessEntityId  The BusinessEntity::id (can be null if the submitted form is in static mode)
     *
     * @return JsonResponse
     * @Route("/victoire-dcms/widget/create/{mode}/{type}/{viewReference}/{slot}/{positionReference}/{businessEntityId}", name="victoire_core_widget_create", defaults={"slot":null, "businessEntityId":null, "positionReference": 0, "_format": "json"})
     * @Template()
     */
    public function createAction($mode, $type, $viewReference, $slot = null, $positionReference = 0, $businessEntityId = null)
    {
        try {
            //services
            $view = $this->getViewByReferenceId($viewReference);

            $isNewPage = $view->getId() === null ? true : false;

            $this->get('victoire_core.current_view')->setCurrentView($view);

            $response = $this->get('widget_manager')->createWidget($mode, $type, $slot, $view, $businessEntityId, $positionReference);

            if ($isNewPage) {
                $response = new JsonResponse([
                    'success'  => true,
                    'redirect' => $this->generateUrl('victoire_core_page_show', ['url' => $view->getUrl()]),
                ]);
            } else {
                $response = new JsonResponse($response);
            }
        } catch (Exception $ex) {
            $response = $this->getJsonReponseFromException($ex);
        }

        return $response;
    }

    /**
     * Edit a widget.
     *
     * @param Widget $widget           The widget to edit
     * @param int    $viewReference    The current view
     * @param string $businessEntityId The BusinessEntity::id (can be null if the submitted form is in static mode)
     *
     * @return JsonResponse
     *
     * @Route("/victoire-dcms/widget/edit/{id}/{viewReference}/{mode}/{businessEntityId}", name="victoire_core_widget_edit", options={"expose"=true})
     * @Route("/victoire-dcms/widget/update/{id}/{viewReference}/{mode}/{businessEntityId}", name="victoire_core_widget_update", defaults={"businessEntityId": null})
     * @Template()
     */
    public function editAction(Widget $widget, $viewReference, $mode = Widget::MODE_STATIC, $businessEntityId = null)
    {
        $view = $this->getViewByReferenceId($viewReference);
        $widgetView = $widget->getView();

        $widgetViewReferenceId = $this->get('victoire_core.helper.view_reference_helper')
            ->getViewReferenceId($widgetView);

        $widgetView->setReference(['id' => $widgetViewReferenceId]);
        $this->get('victoire_core.current_view')->setCurrentView($view);
        try {
            $response = new JsonResponse(
                $this->get('widget_manager')->editWidget(
                    $this->get('request'),
                    $widget,
                    $view,
                    $businessEntityId,
                    $mode
                )
            );
        } catch (Exception $ex) {
            $response = $this->getJsonReponseFromException($ex);
        }

        return $response;
    }

    /**
     * Stylize a widget.
     *
     * @param Widget $widget        The widget to stylize
     * @param int    $viewReference The current view
     *
     * @return JsonResponse
     *
     * @Route("/victoire-dcms/widget/stylize/{id}/{viewReference}", name="victoire_core_widget_stylize", options={"expose"=true})
     * @Template()
     */
    public function stylizeAction(Request $request, Widget $widget, $viewReference)
    {
        $view = $this->getViewByReferenceId($viewReference);
        $widgetView = $widget->getView();

        $widgetViewReferenceId = $this->get('victoire_core.helper.view_reference_helper')
            ->getViewReferenceId($widgetView);

        $widgetView->setReference(['id' => $widgetViewReferenceId]);
        $this->get('victoire_core.current_view')->setCurrentView($view);
        try {
            $form = $this->container->get('form.factory')->create('victoire_widget_style_type', $widget, [
                    'method' => 'POST',
                    'action' => $this->generateUrl(
                        'victoire_core_widget_stylize',
                        [
                            'id'            => $widget->getId(),
                            'viewReference' => $viewReference,
                        ]
                    ),
                ]
            );
            $form->handleRequest($this->get('request'));

            if ($request->query->get('novalidate', false) === false && $form->isValid()) {
                if ($form->has('deleteBackground') && $form->get('deleteBackground')->getData()) {
                    // @todo: dynamic responsive key
                    foreach (['', 'XS', 'SM', 'MD', 'LG'] as $key) {
                        $widget->{'deleteBackground'.$key}();
                    }
                }
                $this->get('doctrine.orm.entity_manager')->flush();
                $params = [
                    'view'        => $view,
                    'success'     => true,
                    'html'        => $this->get('victoire_widget.widget_renderer')->render($widget, $view),
                    'widgetId'    => $widget->getId(),
                    'viewCssHash' => $view->getCssHash(),
                ];
            } else {
                $template = ($request->query->get('novalidate', false) !== false) ? 'VictoireCoreBundle:Widget/Form/stylize:form.html.twig' : 'VictoireCoreBundle:Widget/Form:stylize.html.twig';
                $params = [
                    'success'  => false,
                    'html'     => $this->get('victoire_core.template_mapper')->render(
                        $template,
                        [
                            'view'   => $view,
                            'form'   => $form->createView(),
                            'widget' => $widget,
                        ]
                    ),
                ];
            }
            $response = new JsonResponse($params);
        } catch (Exception $ex) {
            $response = $this->getJsonReponseFromException($ex);
        }

        return $response;
    }

    /**
     * Delete a Widget.
     *
     * @param Widget $widget        The widget to delete
     * @param int    $viewReference The current view
     *
     * @return JsonResponse response
     * @Route("/victoire-dcms/widget/delete/{id}/{viewReference}", name="victoire_core_widget_delete", defaults={"_format": "json"})
     * @Template()
     */
    public function deleteAction(Widget $widget, $viewReference)
    {
        $view = $this->getViewByReferenceId($viewReference);
        try {
            $widgetId = $widget->getId();
            $this->get('widget_manager')->deleteWidget($widget, $view);

            return new JsonResponse([
                    'success'  => true,
                    'message'  => $this->get('translator')->trans('victoire_widget.delete.success', [], 'victoire'),
                    'widgetId' => $widgetId,
                ]
            );
        } catch (Exception $ex) {
            return $this->getJsonReponseFromException($ex);
        }
    }

    /**
     * Unlink a Widget by id
     * -> used to unlink an invalid widget after a bad widget unplug.
     *
     * @param int $id            The widgetId to unlink
     * @param int $viewReference The current viewReference
     *
     * @return JsonResponse response
     * @Route("/victoire-dcms/widget/unlink/{id}/{viewReference}", name="victoire_core_widget_unlink", defaults={"_format": "json"}, options={"expose"=true})
     * @Template()
     */
    public function unlinkAction($id, $viewReference)
    {
        $view = $this->getViewByReferenceId($viewReference);
        try {
            $this->get('victoire_widget.widget_helper')->deleteById($id);
            $this->get('doctrine.orm.entity_manager')->flush();

            if ($view instanceof Template) {
                $redirect = $this->generateUrl('victoire_template_show', ['slug' => $view->getSlug()]);
            } elseif ($view instanceof BusinessTemplate) {
                $redirect = $this->generateUrl('victoire_business_template_show', ['id' => $view->getId()]);
            } else {
                $redirect = $this->generateUrl('victoire_core_page_show', [
                        'url' => $view->getUrl(),
                    ]);
            }

            return new JsonResponse([
                    'success'  => true,
                    'redirect' => $redirect,
                ]);
        } catch (Exception $ex) {
            return $this->getJsonReponseFromException($ex);
        }
    }

    /**
     * Update widget positions accross the view. If moved widget is a Reference, ask to detach the view from template.
     *
     * @param int $viewReference The current viewReference
     *
     * @return JsonResponse
     * @Route("/victoire-dcms/widget/updatePosition/{viewReference}", name="victoire_core_widget_update_position", options={"expose"=true})
     */
    public function updatePositionAction(Request $request, $viewReference)
    {
        $view = $this->getViewByReferenceId($viewReference);
        try {
            //the sorted order for the widgets
            $sortedWidget = $request->get('sorted');

            if (!$view->getId()) {
                //This view does not have an id, so it's a non persisted BEP. To keep this new order, well have to persist it.
                $this->get('doctrine.orm.entity_manager')->persist($view);
                $this->get('doctrine.orm.entity_manager')->flush();
            }

            //recompute the order for the widgets
            $this->get('victoire_widget_map.manager')->updateWidgetMapOrder($view, $sortedWidget);

            $response = new JsonResponse(['success' => true]);
        } catch (Exception $ex) {
            $response = $this->getJsonReponseFromException($ex);
        }

        return $response;
    }

    /**
     * Get the json response by the exception and the current user.
     *
     * @param Exception $ex
     *
     * @return JsonResponse
     */
    protected function getJsonReponseFromException(Exception $ex)
    {
        //services
        $securityContext = $this->get('security.context');
        $logger = $this->get('logger');

        //can we see the debug
        $isDebugAllowed = $securityContext->isGranted('ROLE_VICTOIRE_PAGE_DEBUG');

        //whatever is the exception, we log it
        $logger->error($ex->getMessage());
        $logger->error($ex->getTraceAsString());

        if ($isDebugAllowed) {
            throw $ex;
        } else {
            //translate the message
            $translator = $this->get('translator');

            //get the translated message
            $message = $translator->trans('error_occured', [], 'victoire');

            $response = new JsonResponse(
                [
                    'success' => false,
                    'message' => $message,
                ]
            );
        }

        return $response;
    }

    /**
     * @param int $referenceId
     */
    protected function getViewByReferenceId($referenceId)
    {
        return $this->get('victoire_page.page_helper')->findPageByParameters(['id' => $referenceId]);
    }
}
