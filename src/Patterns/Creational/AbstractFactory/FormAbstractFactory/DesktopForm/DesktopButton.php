<?php

namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\DesktopForm;

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;

class DesktopButton extends AbstractButton
{

    public function onClick(): void
    {
        echo "The button has been clicked<br />";
    }

    public function render(): void
    {
        echo "Desktop Button<br />";
    }
}