<?php

namespace App\Patterns\Structural\Adapter\SMSAdapter\Adapters\ABCSMSManager;

use function LaravelIdea\throw_if;

class SMSManager
{
    public function send(array $messages)
    {
        if ($this->checkConnection() && $this->connect() && $this->authenticate()) {
            foreach ($messages as $message) {
                echo "Your message '{$message['text']}' has been sent to {$message['number']}<br />";
            }
        }
    }

    public function connect(): true
    {
        return true;
    }

    public function checkConnection(): true
    {
        return true;
    }

    public function authenticate(): true
    {
        return true;
    }

    public function validatePhoneNumber(string $phoneNumber): bool
    {
        return strlen($phoneNumber) < 8;
    }

    public function getDeliveryStatus(): string
    {
        return rand(5, 8);
    }
}