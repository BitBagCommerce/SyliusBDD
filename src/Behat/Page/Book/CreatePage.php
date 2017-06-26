<?php

namespace App\Behat\Page\Book;

use Sylius\Behat\Page\Admin\Crud\CreatePage as BaseCreatePage;

final class CreatePage extends BaseCreatePage implements CreatePageInterface
{
    /**
     * {@inheritdoc}
     */
    public function fillWithTitle($title)
    {
        $this->getDocument()->fillField('Title', $title);
    }

    /**
     * {@inheritdoc}
     */
    public function add()
    {
        $this->getDocument()->pressButton('Create');
    }
}