<?php

namespace App\Patterns\Structural\Decorator;

class NotifierDecorator implements Notifier
{
    public function __construct(protected Notifier $notifier) {}

    public function setNotifier(Notifier $notifier): void
    {
        $this->notifier = $notifier;
    }

    public function notify(): void
    {
        $this->notifier->notify();
    }
}