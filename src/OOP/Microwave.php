<?php

namespace App\OOP;

class Microwave
{
    private int $temp;
    private string $program;
    private int $time;
    private bool $status = false;

    public function __construct(int $temp, string $program, int $time)
    {
        $this->temp = $temp;
        $this->program = $program;
        $this->time = $time;
    }

    public function turnOn(): bool
    {
        $this->status = true;
        return true;
    }

    public function turnOff(): bool
    {
        $this->status = false;
        return true;
    }

    public function deFreeze(): string
    {
        $this->turnOnMicrowaveHeatingSystem();
        $this->loadingDeFreezingProgram();
        $this->setTimer();
        return "I am de-freezing the food at $this->temp using the program $this->program";
    }

    public function turnOnMicrowaveHeatingSystem(): string
    {
        return "Starting on heating system..";
    }

    public function loadingDeFreezingProgram(): string
    {
        return "Loading program $this->program";
    }

    public function setTimer(): string
    {
        return "Setting de-freezing time to $this->time seconds";
    }
}