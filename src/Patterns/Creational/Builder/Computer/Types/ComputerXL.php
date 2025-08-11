<?php

namespace App\Patterns\Creational\Builder\Computer\Types;

use App\Patterns\Creational\Builder\Computer\CoolingSystem;
use App\Patterns\Creational\Builder\Computer\UPS;

class ComputerXL extends Computer implements ICoolingSystem, IPower
{
    private CoolingSystem $cs;
    private UPS $ups;

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

    public function backupPower(): bool
    {
        // do something after a power loss
        return true;
    }

    public function setCS(CoolingSystem $cs): void
    {
        $this->cs = $cs;
    }

    public function setUPS(UPS $ups): void
    {
        $this->ups = $ups;
    }

    public function getCS(): CoolingSystem
    {
        return $this->cs;
    }

    public function getUPS(): UPS
    {
        return $this->ups;
    }
}