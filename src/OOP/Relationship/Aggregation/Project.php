<?php

namespace App\OOP\Relationship\Aggregation;

class Project
{
    private string $name;
    private \DateTime $deadline;
    private array $developers;

    public function __construct(string $name, \DateTime $deadline, array $developers)
    {
        $this->name = $name;
        $this->deadline = $deadline;
        $this->developers = $developers;
    }

    public function setDeadlineTo(\DateInterval $interval): void
    {
        $this->deadline->add($interval);
    }

    public function showProjectInformation(): string
    {
        $list = array_map(fn(Developer $dev) => $dev->getName(), $this->developers);
        $devs = implode(", ", $list);
        return "Project Name: $this->name<br />Project Deadline: {$this->deadline->format('Y-m-d')}<br />Developers: {$devs}<br />";
    }
}