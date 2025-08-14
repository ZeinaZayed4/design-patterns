<?php

namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\DesktopForm;

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;

class DesktopTextArea extends AbstractTextArea
{
    public function onResize(): void
    {
        echo "The text are {$this->getName()} has been resized<br />";
    }

    public function render(): void
    {
        echo "Desktop Text Area<br />";
    }
}