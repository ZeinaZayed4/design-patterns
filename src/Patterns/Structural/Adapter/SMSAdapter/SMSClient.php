<?php

namespace App\Patterns\Structural\Adapter\SMSAdapter;

use App\Patterns\Structural\Adapter\SMSAdapter\Messages\Message;

abstract class SMSClient
{
    protected array $messages;
    protected string $deliveryStatus;

    public function __construct(array $messages = [])
    {
        $this->messages = $messages;
    }

    public function addMessage(Message $message): void
    {
        $this->messages[] = $message;
    }

    abstract public function filterNumbers(): bool;
    abstract public function send(): bool;
    abstract public function getDeliveryStatus(): string;
}