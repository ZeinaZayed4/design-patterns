<?php

namespace App\Patterns\Structural\Proxy\RouterInterface;

use App\Patterns\Structural\Proxy\RouterInterface\RoutingComponents\ConnectionManager;
use App\Patterns\Structural\Proxy\RouterInterface\RoutingComponents\Firewall;
use App\Patterns\Structural\Proxy\RouterInterface\RoutingComponents\RoutingTable;

class Router implements RouterInterface
{
    private ConnectionManager $connectionManager;
    private RoutingTable $table;
    private Firewall $firewall;

    public function __construct(ConnectionManager $connectionManager, RoutingTable $table, Firewall $firewall)
    {
        $this->connectionManager = $connectionManager;
        $this->table = $table;
        $this->firewall = $firewall;
    }

    public function resolve(string $url): bool
    {
        $route = $this->table->mapUrlToIpAddress($url);
        if ($route) {
            $this->connect($route->getIpAddress());
        } else {
            echo "Route was not found<br />";
            return false;
        }
        return true;
    }

    public function stream(): void
    {
        $packets = [
            'Package one is clean',
            'Package two is clean',
            'Package three is __BAD__',
            'Package four is __BAD__',
        ];

        foreach ($packets as $packet) {
            if ($this->firewall->isValidPacket($packet)) {
                echo "$packet<br />";
            } else {
                echo "Dropping a packet<br />";
            }
        }

        $this->terminate();
    }

    private function terminate(): void
    {
        $this->connectionManager->terminate();
    }
    
    private function connect(string $ipAddress): void
    {
        $this->connectionManager->connectTo($ipAddress);
    }
}