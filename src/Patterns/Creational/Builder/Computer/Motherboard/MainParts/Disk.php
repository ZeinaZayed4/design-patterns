<?php

namespace App\Patterns\Creational\Builder\Computer\Motherboard\MainParts;

class Disk
{
    private string $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }
}