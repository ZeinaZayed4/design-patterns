<?php

namespace App\Patterns\Creational\FactoryMethod\DialogExample\Dialogs;

use App\Patterns\Creational\FactoryMethod\DialogExample\Buttons\Button;

abstract class Dialog
{
    abstract public function createButton(): Button;

    public function renderDialog(): string
    {
        $button = $this->createButton();

        return "###############
                {$button->show()}
                ###############";
    }
}