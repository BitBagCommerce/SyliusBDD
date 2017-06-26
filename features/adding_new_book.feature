@managing_books
Feature: Adding new book to the store
  In order to add new book to the store
  As an admin
  I want to be able to store the data about this book

  Background:
    Given I am logged in as an administrator

  @ui
  Scenario: Creating new book
    When I open the create new book page
    And I fill the book title with "Harry Potter"
    And I add it
    Then I should be notified that new book was created
