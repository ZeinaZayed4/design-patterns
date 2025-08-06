<?php

namespace App\OOP\Relationship\Association;

class ScienceTeacher extends Teacher
{
    public function assignHomework(): string
    {
        return "Prepare a research on plants";
    }
}