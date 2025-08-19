<?php

namespace App\Patterns\Structural\Facade\FileConverter\FileScanner;

abstract class FileScanner
{
    public function __construct(protected string $file) {}

    abstract public function scan(): bool;
}