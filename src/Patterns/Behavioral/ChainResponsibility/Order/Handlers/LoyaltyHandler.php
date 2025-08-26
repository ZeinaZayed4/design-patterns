<?php

namespace App\Patterns\Behavioral\ChainResponsibility\Order\Handlers;

use App\Patterns\Behavioral\ChainResponsibility\Order\Exceptions\NoLoyalUserException;
use App\Patterns\Behavioral\ChainResponsibility\Order\Order;
use App\Patterns\Behavioral\ChainResponsibility\Order\Services\LoyaltyService\Application;
use Exception;

class LoyaltyHandler extends BaseHandler
{
    /**
     * @throws NoLoyalUserException
     */
    public function handle(Order $order): void
    {
        $loyaltyService = new Application();

        if ($loyaltyService->isUserLoyal($order->getUser())) {
            if ($this->getNextHandler() !== null) {
                $this->getNextHandler()->handle($order);
            }
        } else {
            throw new NoLoyalUserException();
        }
    }
}