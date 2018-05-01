<?php

declare(strict_types=1);

namespace AppBundle\Entity;

final class Foo
{
    public $fooBar;

    public $fooBaz;

    public function __construct(string $fooBar, string $fooBaz)
    {
        $this->fooBar = $fooBar;
        $this->fooBaz = $fooBaz;
    }
}
