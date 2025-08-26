<?php

namespace App\Patterns\Behavioral\ChainResponsibility\Order\Services\ShipmentAvailabilityService;

use App\Patterns\Behavioral\ChainResponsibility\Order\Order;
use DateTime;

class Application
{
    private array $shipmentAvailability = [
        'TRK-1' => "2025-08-17",
        'TRK-2' => "2025-08-25",
        'TRK-3' => "2025-09-03",
    ];

    public function hasShipmentTruckAvailable(Order $order): bool
    {
        foreach ($this->shipmentAvailability as $shipmentDate) {
            if ($order->getShipmentDate() >= new DateTime($shipmentDate)) {
                return true;
            }
        }
        return false;
    }
}