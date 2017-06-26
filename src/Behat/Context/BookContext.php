<?php

namespace App\Behat\Context;

use App\Behat\Page\Book\CreatePageInterface;
use Behat\Behat\Context\Context;
use Sylius\Behat\NotificationType;
use Sylius\Behat\Service\NotificationCheckerInterface;

final class BookContext implements Context
{
    /**
     * @var CreatePageInterface
     */
    private $createPage;

    /**
     * @var NotificationCheckerInterface
     */
    private $notificationChecker;

    /**
     * @param CreatePageInterface $createPage
     * @param NotificationCheckerInterface $notificationChecker
     */
    public function __construct(
        CreatePageInterface $createPage,
        NotificationCheckerInterface $notificationChecker
    )
    {
        $this->createPage = $createPage;
        $this->notificationChecker = $notificationChecker;
    }

    /**
     * @When I open the create new book page
     */
    public function iOpenTheCreateNewBookPage()
    {
        $this->createPage->open();
    }

    /**
     * @When I fill the book title with :title
     */
    public function iFillTheBookTitleWith($title)
    {
        $this->createPage->fillWithTitle($title);
    }

    /**
     * @When I add it
     */
    public function iAddIt()
    {
        $this->createPage->add();
    }

    /**
     * @Then I should be notified that new book was created
     */
    public function iShouldBeNotifiedThatNewBookWasCreated()
    {
        $this->notificationChecker->checkNotification('Book has been successfully created.', NotificationType::success());
    }
}
