<?php

namespace App\OOP\Inheritance;

class TCPClient extends Client
{
    public int $portNumber;

    public function __construct(string $source, int $timeout, int $portNumber)
    {
        parent::__construct($source, $timeout);
        $this->portNumber = $portNumber;
    }
}