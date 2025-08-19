<?php

namespace App\Patterns\Structural\Facade\FileConverter;

use Exception;

class CorruptedFileException extends Exception
{
    public function __construct()
    {
        parent::__construct('This file is corrupted and can not be converted<br />');
    }
}