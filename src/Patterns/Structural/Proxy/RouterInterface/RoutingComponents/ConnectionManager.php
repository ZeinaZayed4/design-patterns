<?php

namespace App\Patterns\Structural\Proxy\RouterInterface\RoutingComponents;

class ConnectionManager
{
    public function connectTo(string $ipAddress): void
    {
        echo "Connecting to {$ipAddress}<br />";
    }

    public function terminate(): void
    {
        echo "Disconnecting...<br />";
    }
}