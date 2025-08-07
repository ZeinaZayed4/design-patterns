<?php

namespace App\OOP\Relationship\Composition;

class ComputerMachine
{
    private CPU $cpu;
    private RAM $ram;

    public function __construct(CPU $cpu, RAM $ram)
    {
        $this->cpu = $cpu;
        $this->ram = $ram;
    }

    public function dashboard(): string
    {
        return "My machine speed is: {$this->cpu->getSpeed()} GHZ with a RAM of {$this->ram->getSize()} GB";
    }
}