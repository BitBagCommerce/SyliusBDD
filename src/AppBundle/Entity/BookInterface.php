<?php

namespace AppBundle\Entity;

use Sylius\Component\Resource\Model\ResourceInterface;

interface BookInterface extends ResourceInterface
{
    /**
     * @param string $title
     */
    public function setTitle($title);

    /**
     * @return string
     */
    public function getTitle();
}