<?php

namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\MobileForm;

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;

class MobileTextInput extends AbstractTextInput
{
    public function onChange(): void
    {
        echo "The value of the {$this->getName()} input was changed to {$this->getValue()}<br />";
    }

    public function render(): void
    {
        echo "Mobile Text Input<br />";
    }
}