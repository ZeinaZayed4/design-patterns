<?php

namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\DesktopForm;

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;

class DesktopTextInput extends AbstractTextInput
{
    public function onChange(): void
    {
        echo "The value of the {$this->getName()} input was changed to {$this->getValue()}<br />";
    }

    public function render(): void
    {
        echo "Desktop Text Input<br />";
    }
}