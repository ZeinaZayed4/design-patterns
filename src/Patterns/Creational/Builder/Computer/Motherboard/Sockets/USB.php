<?php

namespace App\Patterns\Creational\Builder\Computer\Motherboard\Sockets;

class USB
{
    private int $version;

    public function __construct(int $version)
    {
        $this->version = $version;
    }

    public function getVersion(): int
    {
        return $this->version;
    }
}