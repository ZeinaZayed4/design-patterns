<?php

namespace App\Patterns\Structural\Composite\DTOs\DataModelsDTO;

use App\Patterns\Structural\Composite\DTOs\DTOModel;

class OrderOwnerDTO implements DTOModel
{
    private string $name;
    private DTOModel $address;

    public function __construct(string $name, DTOModel $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAddress(): DTOModel
    {
        return $this->address;
    }

    public function render(): array
    {
        return [
            'name' => $this->getName(),
            'address' => $this->getAddress()->render(),
        ];
    }
}