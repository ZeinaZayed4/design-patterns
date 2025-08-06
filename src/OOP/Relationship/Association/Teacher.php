<?php

namespace App\OOP\Relationship\Association;

use App\OOP\Relationship\Association\Printer\Printer;

abstract class Teacher
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function sayWelcome(Printer $printer): string
    {
        $printer->setStringToBePrinted($this->name);
        return $printer->printToScreen();
    }

    abstract public function assignHomework(): string;

    public function evaluateStudentHomework(Student $student): string
    {
        if ($student->getHomeworkScore() >= 50) {
            return "Succeeded";
        }
        return "Failed";
    }
}