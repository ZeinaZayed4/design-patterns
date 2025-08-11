<?php

namespace App\Patterns\Creational\Builder\Builders;

use App\Patterns\Creational\Builder\Builder;
use App\Patterns\Creational\Builder\Computer\CoolingSystem;
use App\Patterns\Creational\Builder\Computer\Keyboard;
use App\Patterns\Creational\Builder\Computer\Monitor;
use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\CPU;
use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\Disk;
use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\GPU;
use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\NetworkCard;
use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\RAM;
use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\Sockets;
use App\Patterns\Creational\Builder\Computer\Motherboard\Motherboard;
use App\Patterns\Creational\Builder\Computer\Motherboard\Sockets\CType;
use App\Patterns\Creational\Builder\Computer\Motherboard\Sockets\USB;
use App\Patterns\Creational\Builder\Computer\Mouse;
use App\Patterns\Creational\Builder\Computer\Types\Computer;
use App\Patterns\Creational\Builder\Computer\Types\ComputerXL;
use App\Patterns\Creational\Builder\Computer\UPS;

class ComputerXLBuilder extends Builder
{
    protected function buildMotherboard(): Motherboard
    {
        $cpu = new CPU(2.8);
        $ram = new RAM(16);
        $gpu = new GPU(2);
        $sockets = new Sockets([
            new USB(2),
            new USB(3),
            new CType(true),
            new CType(true),
            new CType(true),
        ]);
        $networkCard = new NetworkCard(5);
        $disk = new Disk('SSD');

        return new Motherboard($cpu, $ram, $gpu, $sockets, $networkCard, $disk);
    }

    protected function buildKeyBoard(): Keyboard
    {
        return new Keyboard(true);
    }

    protected function buildMouse(): Mouse
    {
        return new Mouse(false);
    }

    protected function buildMonitor(): Monitor
    {
        return new Monitor('1920 FWD');
    }

    protected function buildCoolingSystem(): CoolingSystem
    {
        return new CoolingSystem(5);
    }

    protected function buildUPS(): UPS
    {
        return new UPS(96);
    }

    public function getComputer(): Computer
    {
        $computer = new ComputerXL();
        $computer->setKeyboard($this->buildKeyBoard());
        $computer->setMouse($this->buildMouse());
        $computer->setMonitor($this->buildMonitor());
        $computer->setMotherboard($this->buildMotherboard());
        $computer->setCS($this->buildCoolingSystem());
        $computer->setUPS($this->buildUPS());

        return $computer;
    }
}