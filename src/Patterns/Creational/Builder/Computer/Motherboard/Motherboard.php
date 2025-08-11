<?php

namespace App\Patterns\Creational\Builder\Computer\Motherboard;

use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\CPU;
use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\Disk;
use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\GPU;
use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\NetworkCard;
use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\RAM;
use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\Sockets;

class Motherboard
{
    private CPU $cpu;
    private RAM $ram;
    private GPU $gpu;
    private Sockets $sockets;
    private NetworkCard $networkCard;
    private Disk $disk;

    public function __construct(CPU $cpu, RAM $ram, GPU $gpu, Sockets $sockets, NetworkCard $networkCard, Disk $disk)
    {
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->gpu = $gpu;
        $this->sockets = $sockets;
        $this->networkCard = $networkCard;
        $this->disk = $disk;
    }

    public function getCpu(): CPU
    {
        return $this->cpu;
    }

    public function getRam(): RAM
    {
        return $this->ram;
    }

    public function getGpu(): GPU
    {
        return $this->gpu;
    }

    public function getSockets(): Sockets
    {
        return $this->sockets;
    }

    public function getNetworkCard(): NetworkCard
    {
        return $this->networkCard;
    }

    public function getDisk(): Disk
    {
        return $this->disk;
    }
}