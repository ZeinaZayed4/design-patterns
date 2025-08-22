<?php

namespace App\Patterns\Structural\Proxy\RouterInterface\RoutingComponents;

class Route
{
    private string $url;
    private string $ipAddress;

    public function __construct(string $url, string $ipAddress)
    {
        $this->url = $url;
        $this->ipAddress = $ipAddress;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }
}