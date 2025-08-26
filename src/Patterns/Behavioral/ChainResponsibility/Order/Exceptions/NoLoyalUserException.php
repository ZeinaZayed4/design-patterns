<?php

namespace App\Patterns\Behavioral\ChainResponsibility\Order\Exceptions;

use Exception;
use Throwable;

class NoLoyalUserException extends Exception
{
    public function __construct(
        string $message = "Sorry, you do not have required points to place the order!<br />",
        int $code = 0,
        ?Throwable $previous = null
    )
    {
        parent::__construct($message, $code, $previous);
    }
}