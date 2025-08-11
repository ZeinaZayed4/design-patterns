<?php

namespace App\Patterns\Creational\Builder\Computer\Motherboard\MainParts;

class Sockets
{
    private array $sockets;

    public function __construct(array $sockets)
    {
        $this->sockets = $sockets;
    }

    public function getSockets(): array
    {
        return $this->sockets;
    }
}