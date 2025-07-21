<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\OOP\Employee;
use App\OOP\Microwave;
use \App\OOP\BMW;
use \App\OOP\Mercedes;
use App\OOP\Order;

$zeina = new Employee('Zeina', 23, 20000);
$microwave = new Microwave(90, "DE1", 30);
$bmw = new BMW(320, 2, "Front", "Black");
$mercedes = new Mercedes(335, 4, "Back", "White");
$order1 = new Order("Cairo", "Alexandria", 120);
$order2 = new Order("Suhag", "Aswan", 300);

echo '<pre>';
var_dump($zeina);
echo '</pre>';

if ($microwave->turnOn()) {
    var_dump($microwave->deFreeze());
    echo '<br />';
}
if (!$microwave->turnOff()) {
    var_dump($microwave->deFreeze());
    echo '<br />';
}

var_dump($order1->deliverOrder($bmw)); echo '<br />';
var_dump($order2->deliverOrder($mercedes)); echo '<br />';
