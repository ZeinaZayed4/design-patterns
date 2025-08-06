<?php

namespace App\OOP\Relationship\Association\Printer;

class HTMLPrinter extends Printer
{
    public function printToScreen(): string
    {
        return "<h1>This is an HTML format of the string: $this->stringToBePrinted</h1>";
    }
}