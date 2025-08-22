<?php

namespace App\Patterns\Structural\Proxy\RouterInterface\RoutingComponents;

class RoutingTable
{
    /** @var Route[] */
    private array $routes;
    
    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function mapUrlToIpAddress(string $url): ?Route
    {
        foreach ($this->routes as $route) {
            if ($route->getUrl() === $url) {
                return $route;
            }
        }
        return null;
    }
}