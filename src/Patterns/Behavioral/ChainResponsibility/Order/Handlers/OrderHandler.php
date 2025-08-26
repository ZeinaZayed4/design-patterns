<?php

namespace App\Patterns\Behavioral\ChainResponsibility\Order\Handlers;

use App\Patterns\Behavioral\ChainResponsibility\Order\Order;
use App\Patterns\Behavioral\ChainResponsibility\Order\Services\OrderService\Application;
use Exception;

class OrderHandler extends BaseHandler
{
    /**
     * @throws Exception
     */
    public function handle(Order $order): void
    {
        $orderService = new Application();
        $orderService->addOrder($order);
        echo "The order for {$order->getUser()->getName()}<br /> 
             contains {$order->getProduct()->getName()}<br />
             and will be shipped by {$order->getShipmentDate()->format('Y-m-d')}<br />";
    }
}