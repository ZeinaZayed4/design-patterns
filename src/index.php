<?php

use App\Patterns\Structural\Adapter\SMSAdapter\Adapters\ABCSMSClientAdapter;
use App\Patterns\Structural\Adapter\SMSAdapter\Messages\SMSMessage;
use App\Patterns\Structural\Adapter\SMSAdapter\MonkeySMSClient;

require_once __DIR__ . '/../vendor/autoload.php';

$message1 = new SMSMessage('Welcome to our club', '0123456789');
$message2 = new SMSMessage('Please, join our community', '0123456');
$message3 = new SMSMessage('Your account has been activated', '0123452222');
$message4 = new SMSMessage('Thank you for your feedback', '0123424');

$client = new MonkeySMSClient([
    $message1, $message2, $message3
]);

$client->addMessage($message4);
$client->filterNumbers();
$client->send();

var_dump($client->getDeliveryStatus());

echo '<hr />';

$client2 = new ABCSMSClientAdapter([
    $message1, $message2, $message3
]);

$client2->addMessage($message4);
$client2->filterNumbers();
$client2->send();

var_dump($client2->getDeliveryStatus());
