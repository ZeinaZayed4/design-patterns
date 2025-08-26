<?php

namespace App\Patterns\Behavioral\ChainResponsibility\Order;

use DateTime;

class Order
{
    public function __construct(
        private User $user,
        private Product $product,
        private DateTime $shipmentDate
    ) {}

    public function getUser(): User
    {
        return $this->user;
    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function getShipmentDate(): DateTime
    {
        return $this->shipmentDate;
    }
}