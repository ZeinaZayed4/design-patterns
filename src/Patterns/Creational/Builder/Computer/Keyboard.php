<?php

namespace App\Patterns\Creational\Builder\Computer;

class Keyboard
{
    private bool $utfSupport;

    public function __construct(bool $utfSupport)
    {
        $this->utfSupport = $utfSupport;
    }

    public function isUtfSupport(): bool
    {
        return $this->utfSupport;
    }
}