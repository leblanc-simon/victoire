@mink:selenium2 @alice(Page)  @reset-schema
Feature: Create a blog

Background:
    Given I am logged in as "anakin@victoire.io"
    And I resize the window to 1024x720
    And I am on homepage

    Scenario: I create a new blog
        Given I open the hamburger menu
        Then I should see "Blog"
        When I follow "Blog"
        Then I should see "Aucun résultat"
        When I follow "Créer un nouveau blog"
        Then I should see "Nom"
        When I fill in "Nom" with "The Jedi network"
        And I follow "Créer"
        Then I should see "Page créée avec succès"
        And I wait 5 seconds
        And I switch to "layout" mode
        When I select "Force" from the "1" select of "content" slot
        Then I should see "Créer"
        When I fill in "Côté de la force" with "Obscure"
        And I submit the widget
        Then I should see "Victoire !"

    @alice(Blog) @alice(BlogTemplate) @fail
    Scenario: I create a new article
        Given I open the hamburger menu
        Then I should see "Blog"
        When I follow "Blog"
        Then I should see "The Jedi network"
        And I should see "Créer un article maintenant"
        When I follow "Créer un article maintenant"
        Then I should see "Créer un nouvel article"
        When I fill in "Nom de l'article" with "I'm your father."
        When I fill in "Description" with "This is a great description."
        When I select "First blog template" from "Modèle à utiliser"
        And I follow "Créer"
        And I wait 10 seconds
        Then I should be on "/fr/the-jedi-network/i-m-your-father"
