<?php

use App\Patterns\Behavioral\ChainResponsibility\Order\Exceptions\NoLoyalUserException;
use App\Patterns\Behavioral\ChainResponsibility\Order\Exceptions\NoProductAvailableException;
use App\Patterns\Behavioral\ChainResponsibility\Order\Exceptions\NoShipmentAvailableException;
use App\Patterns\Behavioral\ChainResponsibility\Order\Handlers\LoyaltyHandler;
use App\Patterns\Behavioral\ChainResponsibility\Order\Handlers\OrderHandler;
use App\Patterns\Behavioral\ChainResponsibility\Order\Handlers\ProductAvailabilityHandler;
use App\Patterns\Behavioral\ChainResponsibility\Order\Handlers\ShipmentHandler;
use App\Patterns\Behavioral\ChainResponsibility\Order\Order;
use App\Patterns\Behavioral\ChainResponsibility\Order\Product;
use App\Patterns\Behavioral\ChainResponsibility\Order\User;

require_once __DIR__ . '/../vendor/autoload.php';

$user = new User('USR-100', 'Zeina Zayed');
$product = new Product('PRO-1', 'Dell laptop');
$order = new Order($user, $product, new DateTime('2025-08-17'));

$loyaltyHandler = new LoyaltyHandler();
$loyaltyHandler
    ->setNextHandler(new ProductAvailabilityHandler())
    ->setNextHandler(new ShipmentHandler())
    ->setNextHandler(new OrderHandler());

try {
    $loyaltyHandler->handle($order);
} catch (NoLoyalUserException|NoProductAvailableException|NoShipmentAvailableException $e) {
    echo $e->getMessage();
}
