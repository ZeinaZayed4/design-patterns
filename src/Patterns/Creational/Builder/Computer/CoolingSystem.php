<?php

namespace App\Patterns\Creational\Builder\Computer;

class CoolingSystem
{
    private int $lowTempLimit;

    public function __construct(int $lowTempLimit)
    {
        $this->lowTempLimit = $lowTempLimit;
    }

    public function getLowTempLimit(): int
    {
        return $this->lowTempLimit;
    }
}