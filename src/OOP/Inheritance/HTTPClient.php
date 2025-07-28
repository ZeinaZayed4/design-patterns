<?php

namespace App\OOP\Inheritance;

class HTTPClient extends Client
{
    public function __construct(string $source, int $timeout)
    {
        parent::__construct($source, $timeout);
    }

    public function welcomeAfterConnect(): string
    {
        return "{$this->connect()} an extra welcome to $this->source";
    }
}