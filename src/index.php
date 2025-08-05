<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\OOP\Polymorphism\Employee;
use App\OOP\Polymorphism\OrganizationSalary;
use App\OOP\Polymorphism\Salary;

$ahmed = new Employee(
    'Ahmed',
    30,
    'Cairo',
    new OrganizationSalary(
        10000,
        0.2,
        30,
        2,
        75,
        30,
        0.1
    )
);

echo "Salary for {$ahmed->getName()} after adding tax is: {$ahmed->getSalary()->calculateSalary()}";
