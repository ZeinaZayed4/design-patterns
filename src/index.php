<?php

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\GUIClient;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\MobileForm\MobileFormFactory;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm\WebFormFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$client = new GUIClient(new WebFormFactory());
echo $client->createForm();

echo '<hr />';

$client->setFactory(new MobileFormFactory());
echo $client->createForm();
