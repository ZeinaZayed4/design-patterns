<?php

namespace App\OOP\Abstraction_Encapsulation;

abstract class Car
{
    protected int $speed;
    protected int $numberOfDoors;
    protected string $gearBoxSystem;
    protected string $color;
    protected bool $turnedOn = false;
    private CarDashboard $dashboard;

    public function __construct(int $speed, int $numberOfDoors, string $gearBoxSystem, string $color)
    {
        $this->speed = $speed;
        $this->numberOfDoors = $numberOfDoors;
        $this->gearBoxSystem = $gearBoxSystem;
        $this->color = $color;
    }

    public abstract function move(): int;
    public abstract function turnOn(): bool;
    public abstract function turnOff(): bool;
    public abstract function accelerate(int $speed): bool;
    public abstract function park(): bool;
    public function installDashboard(CarDashboard $dashboard): void
    {
        $this->dashboard = $dashboard;
    }
    public function carInfo(): string
    {
        if ($this->dashboard) {
            return "The speed is $this->speed \nMore info... \n{$this->dashboard->readDashboard()}";
        } else {
            return "This car doesn't have a dashboard";
        }
    }
}