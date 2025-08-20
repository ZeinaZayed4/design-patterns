<?php

namespace App\Patterns\Structural\Decorator\Decorators;

use App\Patterns\Structural\Decorator\Notifier;
use App\Patterns\Structural\Decorator\NotifierDecorator;

class SMSNotifierDecorator extends NotifierDecorator
{
    public function __construct(protected Notifier $notifier, protected string $phoneNumber)
    {
        parent::__construct($this->notifier);
    }

    public function notify(): void
    {
        parent::notify();
        $this->sendSMS();
    }

    private function sendSMS(): void
    {
        echo "<b>Sending SMS to:</b> $this->phoneNumber<br />";
        echo "Your latest operation was executed successfully<br />";
    }
}