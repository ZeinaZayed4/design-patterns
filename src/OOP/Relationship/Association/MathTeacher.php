<?php

namespace App\OOP\Relationship\Association;

class MathTeacher extends Teacher
{
    public function assignHomework(): string
    {
        return "Calculate the sum of 4 and 8";
    }
}