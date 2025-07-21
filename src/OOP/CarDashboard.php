<?php

namespace App\OOP;

class CarDashboard
{
    protected int $oilLevel;
    protected int $fuelLevel;
    protected int $airPressure;

    private function getOilLevel(): int
    {
        return $this->oilLevel;
    }

    private function getFuelLevel(): int
    {
        return $this->fuelLevel;
    }

    private function getAirPressure(): int
    {
        return $this->airPressure;
    }

    public function readDashboard(): string
    {
        return "Showing the following analysis: \n
                Fuel: {$this->getFuelLevel()}\n
                Oil: {$this->getOilLevel()}\n
                Air Pressure: {$this->getAirPressure()}";
    }
}