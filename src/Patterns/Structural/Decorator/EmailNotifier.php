<?php

namespace App\Patterns\Structural\Decorator;

class EmailNotifier implements Notifier
{
    public function __construct(private string $email) {}

    public function notify(): void
    {
        echo "<b>Sending email to:</b> $this->email<br />";
        echo "Your latest operation was executed successfully<br />";
    }
}