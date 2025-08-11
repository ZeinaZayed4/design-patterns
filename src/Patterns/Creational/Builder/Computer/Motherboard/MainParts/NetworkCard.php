<?php

namespace App\Patterns\Creational\Builder\Computer\Motherboard\MainParts;

class NetworkCard
{
    private int $category;

    public function __construct(int $category)
    {
        $this->category = $category;
    }

    public function getCategory(): int
    {
        return $this->category;
    }
}