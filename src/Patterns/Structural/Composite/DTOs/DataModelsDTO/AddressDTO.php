<?php

namespace App\Patterns\Structural\Composite\DTOs\DataModelsDTO;

use App\Patterns\Structural\Composite\DTOs\DTOModel;

class AddressDTO implements DTOModel
{
    private string $streetName;
    private string $houseNumber;
    private string $zipCode;

    public function __construct(string $streetName, string $houseNumber, string $zipCode)
    {
        $this->streetName = $streetName;
        $this->houseNumber = $houseNumber;
        $this->zipCode = $zipCode;
    }

    public function getStreetName(): string
    {
        return $this->streetName;
    }

    public function getHouseNumber(): string
    {
        return $this->houseNumber;
    }

    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    public function render(): array
    {
        return [
            'streetName' => $this->getStreetName(),
            'houseNumber' => $this->getHouseNumber(),
            'zipCode' => $this->getZipCode(),
        ];
    }
}