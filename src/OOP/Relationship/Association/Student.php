<?php

namespace App\OOP\Relationship\Association;

class Student
{
    private string $name;
    private string $homework;
    private int $homeworkScore = 50;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function assignATempTeacher(Teacher $teacher): void
    {
        $this->homework = $teacher->assignHomework();
    }

    public function getHomeworkScore(): int
    {
        return $this->homeworkScore;
    }

    public function doHomework(): void
    {
        $this->homeworkScore = 60;
    }
}