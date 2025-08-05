<?php

namespace App\OOP\Polymorphism;

class Employee
{
    private string $name;
    private int $age;
    private string $address;
    private Salary $salary;

    public function __construct(
        string $name,
        int    $age,
        string $address,
        Salary $salary
    )
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->salary = $salary;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getSalary(): Salary
    {
        return $this->salary;
    }
}