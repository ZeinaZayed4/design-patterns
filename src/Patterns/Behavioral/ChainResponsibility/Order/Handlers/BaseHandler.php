<?php

namespace App\Patterns\Behavioral\ChainResponsibility\Order\Handlers;

abstract class BaseHandler implements Handler
{
    private Handler $nextHandler;

    public function setNextHandler(Handler $handler): Handler
    {
        $this->nextHandler = $handler;
        return $this->nextHandler;
    }

    public function getNextHandler(): Handler
    {
        return $this->nextHandler;
    }
}