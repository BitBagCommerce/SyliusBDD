<?php

namespace spec\AppBundle\Entity;

use AppBundle\Entity\Book;
use AppBundle\Entity\BookInterface;
use PhpSpec\ObjectBehavior;
use Sylius\Component\Resource\Model\ResourceInterface;

final class BookSpec extends ObjectBehavior
{
    const TITLE = 'Harry Potter';

    function it_is_initializable()
    {
        $this->shouldHaveType(Book::class);
        $this->shouldHaveType(BookInterface::class);
        $this->shouldHaveType(ResourceInterface::class);
    }

    function it_allows_access_via_properties()
    {
        $this->setTitle(self::TITLE);
        $this->getTitle()->shouldReturn('Harry Potter');
    }
}
