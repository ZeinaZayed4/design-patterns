<?php

namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm;

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;

class WebTextInput extends AbstractTextInput
{
    public function onChange(): void
    {
        echo "The value of the {$this->getName()} input was changed to {$this->getValue()}<br />";
    }

    public function render(): void
    {
        echo "Web Text Input<br />";
    }
}