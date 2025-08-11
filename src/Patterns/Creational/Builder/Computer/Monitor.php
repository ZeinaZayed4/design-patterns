<?php

namespace App\Patterns\Creational\Builder\Computer;

class Monitor
{
    private string $resolution;

    public function __construct(string $resolution)
    {
        $this->resolution = $resolution;
    }

    public function getResolution(): string
    {
        return $this->resolution;
    }
}