<?php

use App\Patterns\Creational\Prototype\Employee\EmployeePrototype;
use App\Patterns\Creational\Prototype\Employee\Privileges\Privileges;
use App\Patterns\Creational\Prototype\Employee\Privileges\Types\NetworkPrivilege;
use App\Patterns\Creational\Prototype\Employee\Privileges\Types\ServerRoomPrivilege;
use App\Patterns\Creational\Prototype\Employee\Privileges\Types\WebProjectPrivilege;
use App\Patterns\Creational\Prototype\Employee\ProfileData;
use App\Patterns\Creational\Prototype\Employee\Salary;
use App\Patterns\Creational\Prototype\Employee\Address;

require_once __DIR__ . '/../vendor/autoload.php';

$zeina = new EmployeePrototype(
    new ProfileData(
        'Zeina Zayed',
        23,
        new Address(
            24.1551,
            42.4551,
            'Al Azhar Street',
            'Cairo',
            'Egypt',
            13,
            12345
        ),
        '0501234567',
        '+0101234567',
        'zeina_zayed'
    ),
    new Salary(15000, 0.23, 1000),
    new Privileges([
        new WebProjectPrivilege(),
        new ServerRoomPrivilege()
    ])
);

$zeina->getPrivileges()->addPrivilege(new NetworkPrivilege());

echo '<pre>';
var_dump($zeina);
echo '</pre>';

echo '<hr />';

$hana = clone $zeina;

echo '<pre>';
var_dump($hana);
echo '</pre>';
