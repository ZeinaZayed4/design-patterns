<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\OOP\Abstraction_Encapsulation\BMW;
use App\OOP\Abstraction_Encapsulation\Employee;
use App\OOP\Abstraction_Encapsulation\Mercedes;
use App\OOP\Abstraction_Encapsulation\Microwave;
use App\OOP\Abstraction_Encapsulation\Order;
use App\OOP\Inheritance\HTTPClient;
use App\OOP\Inheritance\TCPClient;

$zeina = new Employee('Zeina', 23, 20000);
$microwave = new Microwave(90, "DE1", 30);
$bmw = new BMW(320, 2, "Front", "Black");
$mercedes = new Mercedes(335, 4, "Back", "White");
$order1 = new Order("Cairo", "Alexandria", 120);
$order2 = new Order("Suhag", "Aswan", 300);

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

echo '<hr/>';

$http = new HTTPClient('https://www.abc.com', 5);
echo $http->connect() . '<br/>';
echo $http->call('/users') . '<br/>';
echo $http->terminate() . '<br/>';
echo $http->welcomeAfterConnect() . '<br/>';

$tcp = new TCPClient('https://www.abc.com', 5, 8000);
echo $tcp->connect() . '<br/>';
