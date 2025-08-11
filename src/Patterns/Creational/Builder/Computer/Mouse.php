<?php

namespace App\Patterns\Creational\Builder\Computer;

class Mouse
{
    private bool $withExtraUtilities;

    public function __construct(bool $withExtraUtilities)
    {
        $this->withExtraUtilities = $withExtraUtilities;
    }

    public function isWithExtraUtilities(): bool
    {
        return $this->withExtraUtilities;
    }
}