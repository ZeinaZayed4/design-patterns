<?php

namespace App\Patterns\Structural\Facade\FileConverter\FileScanner\Audio;

use App\Patterns\Structural\Facade\FileConverter\FileScanner\FileScanner;

class MP3FileScanner extends FileScanner
{
    public function scan(): bool
    {
        // do a lot of stuff here, then return the file status
        return (bool)rand(0, 1);
    }
}