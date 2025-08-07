<?php

use App\OOP\Relationship\Aggregation\Project;
use App\OOP\Relationship\Aggregation\Developer;
use App\OOP\Relationship\Composition\House;
use App\OOP\Relationship\Composition\Room;
use App\OOP\Relationship\Composition\CPU;
use App\OOP\Relationship\Composition\RAM;
use App\OOP\Relationship\Composition\ComputerMachine;

require_once __DIR__ . '/../vendor/autoload.php';

// Aggregation example
$zeina = new Developer('Zeina');
$hana = new Developer('Hana');
$adam = new Developer('Adam');

$xProject = new Project(
    'X Project',
    new DateTime('now'),
    [$zeina, $hana, $adam]
);

$xProject->setDeadlineTo(new DateInterval('P1M'));

echo $xProject->showProjectInformation();

unset($xProject);

// developers still exist
echo $zeina->getName();

echo '<hr />';

// Composition example
$room1 = new Room('White', 20);
$room2 = new Room('Pink', 30);
$room3 = new Room('Blue', 25);

$house = new House([$room1, $room2, $room3]);

$cpu = new CPU(3.6);
$ram = new RAM(16);
$pc = new ComputerMachine($cpu, $ram);

echo $pc->dashboard();
