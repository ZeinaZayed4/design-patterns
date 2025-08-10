<?php

namespace App\Patterns\Creational\FactoryMethod\DialogExample\Buttons;

class SystemButton extends Button
{
    public function show(): string
    {
        return "<br />System Button<br />";
    }

    public function click(): void
    {
        // punch of commands to be executed
    }
}