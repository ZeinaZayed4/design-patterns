<?php

namespace App\Patterns\Structural\Adapter\SMSAdapter\Messages;

class SMSMessage implements Message
{
    private string $message;
    private string $number;

    public function __construct(string $message, string $number)
    {
        $this->message = $message;
        $this->number = $number;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function validateMessage(): bool
    {
        return strlen($this->message) < 10;
    }

    public function validateNumber(): bool
    {
        return strlen($this->number) > 8;
    }
}