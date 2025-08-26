<?php

namespace App\Patterns\Behavioral\ChainResponsibility\Order\Exceptions;

use Exception;
use Throwable;

class NoShipmentAvailableException extends Exception
{
    public function __construct(
        string $message = "Sorry, we do not ship at this time!<br />",
        int $code = 0,
        ?Throwable $previous = null
    )
    {
        parent::__construct($message, $code, $previous);
    }
}