<?php

use App\Patterns\Structural\Composite\DTOs\DataModelsDTO\AddressDTO;
use App\Patterns\Structural\Composite\DTOs\DataModelsDTO\OrderDTO;
use App\Patterns\Structural\Composite\DTOs\DataModelsDTO\OrderOwnerDTO;
use App\Patterns\Structural\Composite\DTOs\DataModelsDTO\PurchaseBill;

require_once __DIR__ . '/../vendor/autoload.php';

$address1 = new AddressDTO('Al Ahram Street', '12A', '1234');
$address2 = new AddressDTO('Cairo Street', '24A', '5678');
$address3 = new AddressDTO('Mansoura Street', '36A', '2468');

$zeina = new OrderOwnerDTO('Zeina Zayed', $address1);
$hana = new OrderOwnerDTO('Hana Atef', $address2);
$adam = new OrderOwnerDTO('Adam Ismail', $address3);

$order1 = new OrderDTO($zeina, new DateTime('now'), 1200.12, 6);
$order2 = new OrderDTO($hana, new DateTime('now'), 2400.24, 4);
$order3 = new OrderDTO($adam, new DateTime('now'), 3600.36, 2);

$bill = new PurchaseBill([$order1, $order2, $order3]);

echo $bill;
