<?php

namespace App\OOP\Relationship\Composition;

class CPU
{
    private float $speed;

    public function __construct(float $speed)
    {
        $this->speed = $speed;
    }

    public function getSpeed(): float
    {
        return $this->speed;
    }
}