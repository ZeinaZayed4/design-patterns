<?php


use App\Patterns\Structural\Facade\FileConverter\CorruptedFileException;
use App\Patterns\Structural\Facade\FileConverter\FileConverterFacade;

require_once __DIR__ . '/../vendor/autoload.php';

try {
    $converter_mp3 = new FileConverterFacade('audio.mp3');
    $converter_mp3->convert();
} catch (CorruptedFileException $e) {
    echo $e->getMessage();
}

echo '<hr />';

try {
    $converter_mp4 = new FileConverterFacade('video.mp4');
    $converter_mp4->convert();
} catch (CorruptedFileException $e) {
    echo $e->getMessage();
}
