<?php

namespace App\Patterns\Structural\Facade\FileConverter\Converter\Video;

use App\Patterns\Structural\Facade\FileConverter\Converter\Converter;

class VideoConverter implements Converter
{
    public function convert(string $fileName, string $fromType, string $toType): void
    {
        echo "I am converting the video file '$fileName' from $fromType to $toType<br />";
    }
}