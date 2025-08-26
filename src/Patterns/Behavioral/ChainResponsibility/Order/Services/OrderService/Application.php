<?php

namespace App\Patterns\Behavioral\ChainResponsibility\Order\Services\OrderService;

use App\Patterns\Behavioral\ChainResponsibility\Order\Order;

class Application
{
    private array $orders = [];

    public function addOrder(Order $order): void
    {
        $this->orders[] = $order;
    }
}