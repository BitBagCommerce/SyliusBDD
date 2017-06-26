<?php

namespace App\Behat\Page\Book;

use Sylius\Behat\Page\Admin\Crud\CreatePageInterface as BaseCreatePageInterface;

interface CreatePageInterface extends BaseCreatePageInterface
{
    /**
     * @param string $title
     */
    public function fillWithTitle($title);

    /**
     * @void
     */
    public function add();
}