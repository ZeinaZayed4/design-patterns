<?php

namespace App\OOP\Polymorphism;

class Salary
{
    protected float $salary;
    protected float $tax;
    protected int $overTime;
    protected int $absent;
    protected int $absentRate;
    protected int $overTimeRate;

    public function __construct(float $salary, float $tax, int $overTime, int $absent, int $absentRate, int $overTimeRate)
    {
        $this->salary = $salary;
        $this->tax = $tax;
        $this->overTime = $overTime;
        $this->absent = $absent;
        $this->absentRate = $absentRate;
        $this->overTimeRate = $overTimeRate;
    }

    public function calculateSalary(): float
    {
        return $this->salary - ($this->salary * $this->tax);
    }
}