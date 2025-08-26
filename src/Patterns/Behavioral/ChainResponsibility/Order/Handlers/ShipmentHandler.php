<?php

namespace App\Patterns\Behavioral\ChainResponsibility\Order\Handlers;

use App\Patterns\Behavioral\ChainResponsibility\Order\Exceptions\NoShipmentAvailableException;
use App\Patterns\Behavioral\ChainResponsibility\Order\Order;
use App\Patterns\Behavioral\ChainResponsibility\Order\Services\ShipmentAvailabilityService\Application;
use Exception;

class ShipmentHandler extends BaseHandler
{
    /**
     * @throws NoShipmentAvailableException
     */
    public function handle(Order $order): void
    {
        $shipmentAvailabilityService = new Application();

        if ($shipmentAvailabilityService->hasShipmentTruckAvailable($order)) {
            if ($this->getNextHandler() !== null) {
                $this->getNextHandler()->handle($order);
            }
        } else {
            throw new NoShipmentAvailableException();
        }
    }
}