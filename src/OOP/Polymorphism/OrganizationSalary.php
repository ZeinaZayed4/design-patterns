<?php

namespace App\OOP\Polymorphism;

class OrganizationSalary extends Salary
{
    protected float $organizationTax;

    public function __construct(
        float $salary,
        float $tax,
        int   $overTime,
        int   $absent,
        int   $absentRate,
        int   $overTimeRate,
        float $organizationTax
    )
    {
        parent::__construct($salary, $tax, $overTime, $absent, $absentRate, $overTimeRate);
        $this->organizationTax = $organizationTax;
    }

    public function calculateSalary(): float
    {
        return $this->salary - ($this->salary * $this->tax) - ($this->salary * $this->organizationTax);
    }
}