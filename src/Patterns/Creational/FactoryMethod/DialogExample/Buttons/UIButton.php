<?php

namespace App\Patterns\Creational\FactoryMethod\DialogExample\Buttons;

class UIButton extends Button
{
    public function show(): string
    {
        return "<br />UI Button<br />";
    }

    public function click(): void
    {
        // punch of commands to be executed
    }
}