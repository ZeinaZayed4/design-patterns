<?php

namespace App\Patterns\Structural\Proxy\RouterInterface\Clients;

class Application2 extends Application
{
    public function __construct(string $appName = 'APP_2')
    {
        parent::__construct($appName);
    }
}