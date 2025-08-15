<?php

use App\Patterns\Creational\Singleton\AppSettings;

require_once __DIR__ . '/../vendor/autoload.php';

$settings = AppSettings::getInstance();

$settings2 = AppSettings::getInstance();

echo '<pre>';
var_dump($settings::getConfig('Database')['portNumber']);
var_dump($settings2::getConfig('Cache')['portNumber']);
var_dump($settings, $settings2);
echo '</pre>';
