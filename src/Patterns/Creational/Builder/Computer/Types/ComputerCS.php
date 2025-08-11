<?php

namespace App\Patterns\Creational\Builder\Computer\Types;

use App\Patterns\Creational\Builder\Computer\CoolingSystem;

class ComputerCS extends Computer implements ICoolingSystem
{
    private CoolingSystem $cs;

    public function turnOn(): bool {
        // do something
        return true;
    }

    public function turnOff(): bool {
        // do something
        return true;
    }

    public function coolDown(int $temp): bool
    {
        // do something to cool the $temp
        return true;
    }

    public function setCS(CoolingSystem $cs): void
    {
        $this->cs = $cs;
    }

    public function getCS(): CoolingSystem
    {
        return $this->cs;
    }
}