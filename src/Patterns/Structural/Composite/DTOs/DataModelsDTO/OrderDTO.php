<?php

namespace App\Patterns\Structural\Composite\DTOs\DataModelsDTO;

use App\Patterns\Structural\Composite\DTOs\DTOModel;
use DateTime;

class OrderDTO implements DTOModel
{
    private DTOModel $owner;
    private DateTime $createdAt;
    private float $price;
    private int $quantity;

    public function __construct(DTOModel $owner, DateTime $createdAt, float $price, int $quantity)
    {
        $this->owner = $owner;
        $this->createdAt = $createdAt;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getOwner(): DTOModel
    {
        return $this->owner;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function render(): array
    {
        return [
            'owner' => $this->getOwner()->render(),
            'createdAt' => $this->getCreatedAt()->format('Y-m-d'),
            'price' => $this->getPrice(),
            'quantity' => $this->getQuantity(),
        ];
    }
}