<?php

namespace App\Patterns\Structural\Proxy\RouterInterface\Clients;

class Application
{
    protected string $appName;

    public function __construct(string $appName)
    {
        $this->appName = $appName;
    }

    public function getAppName(): string
    {
        return $this->appName;
    }
}