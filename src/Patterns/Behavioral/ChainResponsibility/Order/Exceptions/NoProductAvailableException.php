<?php

namespace App\Patterns\Behavioral\ChainResponsibility\Order\Exceptions;

use Exception;
use Throwable;

class NoProductAvailableException extends Exception
{
    public function __construct(
        string $message = "Sorry, the product is not available at the moment!<br />",
        int $code = 0,
        ?Throwable $previous = null
    )
    {
        parent::__construct($message, $code, $previous);
    }
}