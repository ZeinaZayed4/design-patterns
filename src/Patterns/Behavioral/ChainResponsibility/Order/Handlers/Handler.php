<?php

namespace App\Patterns\Behavioral\ChainResponsibility\Order\Handlers;

use App\Patterns\Behavioral\ChainResponsibility\Order\Order;

interface Handler
{
    public function setNextHandler(Handler $handler);

    public function handle(Order $order);
}