<?php

namespace App\Patterns\Behavioral\ChainResponsibility\Order\Handlers;

use App\Patterns\Behavioral\ChainResponsibility\Order\Exceptions\NoProductAvailableException;
use App\Patterns\Behavioral\ChainResponsibility\Order\Order;
use App\Patterns\Behavioral\ChainResponsibility\Order\Services\ProductAvailabilityService\Application;

class ProductAvailabilityHandler extends BaseHandler
{
    /**
     * @throws NoProductAvailableException
     */
    public function handle(Order $order): void
    {
        $productAvailabilityService = new Application();

        if ($productAvailabilityService->isProductAvailable($order->getProduct())) {
            if ($this->getNextHandler() !== null) {
                $this->getNextHandler()->handle($order);
            }
        } else {
            throw new NoProductAvailableException();
        }
    }
}