<?php

namespace App\Patterns\Structural\Proxy\RouterInterface\Clients;

use DateTime;

class Application1 extends Application
{
    private DateTime $initializedAt;

    public function __construct(DateTime $initializedAt, string $appName = 'APP_1')
    {
        parent::__construct($appName);
        $this->initializedAt = $initializedAt;
    }
}