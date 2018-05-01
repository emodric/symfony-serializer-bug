<?php

declare(strict_types=1);

namespace AppBundle\Entity;

final class Bar
{
    public $someProperty;

    public function __construct(string $someProperty)
    {
        $this->someProperty = $someProperty;
    }
}
