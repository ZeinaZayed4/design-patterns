<?php

namespace App\Patterns\Creational\Builder\Computer\Motherboard\Sockets;

class CType
{
    private bool $withVideoTransfer;

    public function __construct(bool $withVideoTransfer)
    {
        $this->withVideoTransfer = $withVideoTransfer;
    }

    public function isWithVideoTransfer(): bool
    {
        return $this->withVideoTransfer;
    }
}