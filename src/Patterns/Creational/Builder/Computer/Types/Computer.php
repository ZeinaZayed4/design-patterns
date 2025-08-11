<?php

namespace App\Patterns\Creational\Builder\Computer\Types;

use App\Patterns\Creational\Builder\Computer\Keyboard;
use App\Patterns\Creational\Builder\Computer\Monitor;
use App\Patterns\Creational\Builder\Computer\Motherboard\Motherboard;
use App\Patterns\Creational\Builder\Computer\Mouse;

abstract class Computer
{
    protected Motherboard $motherboard;
    protected Keyboard $keyboard;
    protected Mouse $mouse;
    protected Monitor $monitor;
    
    abstract public function turnOn(): bool;
    abstract public function turnOff(): bool;

    public function setMotherboard(Motherboard $motherboard): void
    {
        $this->motherboard = $motherboard;
    }

    public function setKeyboard(Keyboard $keyboard): void
    {
        $this->keyboard = $keyboard;
    }

    public function setMouse(Mouse $mouse): void
    {
        $this->mouse = $mouse;
    }

    public function setMonitor(Monitor $monitor): void
    {
        $this->monitor = $monitor;
    }

    public function dashboard(): string
    {
        return '';
    }
}