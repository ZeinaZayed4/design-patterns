<?php

namespace App\OOP\Inheritance;

class Client
{
    protected string $source;
    protected int $timeout;

    public function __construct(string $source, int $timeout)
    {
        $this->source = $source;
        $this->timeout = $timeout;
    }

    public function connect(): string
    {
        return "I am connecting to $this->source";
    }

    public function call(string $url): string
    {
        return "I have fetched this data for you DATA";
    }

    public function terminate(): bool
    {
        return true;
    }
}