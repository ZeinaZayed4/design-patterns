<?php

namespace App\Patterns\Structural\Facade\FileConverter\Normalizer\Audio;

use App\Patterns\Structural\Facade\FileConverter\Normalizer\Normalizer;

class AudioNormalizer implements Normalizer
{
    public function normalize(string $fileName): void
    {
        echo "I am normalizing the audio file '$fileName' due to some data corruption<br />";
    }
}