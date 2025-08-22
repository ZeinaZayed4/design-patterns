<?php

namespace App\Patterns\Structural\Proxy\RouterInterface;

use App\Patterns\Structural\Proxy\RouterInterface\Clients\Application;

class RouterProxy implements RouterInterface
{
    private RouterInterface $router;
    private Application $app;
    private array $acl;

    public function __construct(RouterInterface $router, Application $app, array $acl)
    {
        $this->router = $router;
        $this->app = $app;
        $this->acl = $acl;
    }

    public function resolve(string $url): bool
    {
        if ($this->isAllowedApplication()) {
            return $this->router->resolve($url);
        } else {
            echo "This application can not use the router";
        }
        return false;
    }

    public function stream(): void
    {
        if ($this->isAllowedApplication()) {
            $this->router->stream();
        } else {
            echo "This application can not use the router";
        }

    }

    private function isAllowedApplication(): bool
    {
        return in_array($this->app->getAppName(), $this->acl);
    }
}