<?php

namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm;

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;

class WebTextArea extends AbstractTextArea
{
    public function onResize(): void
    {
        echo "The text are {$this->getName()} has been resized<br />";
    }

    public function render(): void
    {
        echo "Web Text Area<br />";
    }
}