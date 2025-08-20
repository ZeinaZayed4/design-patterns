<?php

use App\Patterns\Structural\Decorator\Decorators\SMSNotifierDecorator;
use App\Patterns\Structural\Decorator\Decorators\WhatsAppNotifierDecorator;
use App\Patterns\Structural\Decorator\EmailNotifier;

require_once __DIR__ . '/../vendor/autoload.php';

$smsNotificationEnabled = true;
$whatsAppNotificationEnabled = true;

$notifier = new EmailNotifier('zeina@example.com');

if ($smsNotificationEnabled) {
    $notifier = new SMSNotifierDecorator($notifier, '01234567891');
}

if ($whatsAppNotificationEnabled) {
    $notifier = new WhatsAppNotifierDecorator($notifier, '01234567891');
}

$notifier->notify();
