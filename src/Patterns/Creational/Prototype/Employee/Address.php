<?php

namespace App\Patterns\Creational\Prototype\Employee;

class Address
{
    private float $longitude;
    private float $latitude;
    private string $streetName;
    private string $city;
    private string $country;
    private string $buildNumber;
    private int $zipCode;

    public function __construct(float $longitude, float $latitude, string $streetName, string $city, string $country, string $buildNumber, int $zipCode)
    {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
        $this->streetName = $streetName;
        $this->city = $city;
        $this->country = $country;
        $this->buildNumber = $buildNumber;
        $this->zipCode = $zipCode;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function getStreetName(): string
    {
        return $this->streetName;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getBuildNumber(): string
    {
        return $this->buildNumber;
    }

    public function getZipCode(): int
    {
        return $this->zipCode;
    }
}