<?php

namespace App\Patterns\Creational\Builder\Computer\Motherboard\MainParts;

class GPU
{
    private int $size;

    public function __construct(int $size)
    {
        $this->size = $size;
    }

    public function getSize(): int
    {
        return $this->size;
    }
}