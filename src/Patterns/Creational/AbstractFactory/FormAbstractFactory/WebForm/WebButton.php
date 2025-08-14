<?php

namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm;

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;

class WebButton extends AbstractButton
{
    public function onClick(): void
    {
        echo "The button has been clicked<br />";
    }

    public function render(): void
    {
        echo "Web Button<br />";
    }
}