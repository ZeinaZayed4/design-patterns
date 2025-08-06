<?php

use App\OOP\Relationship\Association\MathTeacher;
use App\OOP\Relationship\Association\Printer\HTMLPrinter;
use App\OOP\Relationship\Association\Student;
use App\OOP\Relationship\Association\ScienceTeacher;

require_once __DIR__ . '/../vendor/autoload.php';

$zeina = new MathTeacher('Zeina Zayed');
$ohoud = new ScienceTeacher('Ohoud Zayed');
$printer = new HTMLPrinter();

echo $zeina->sayWelcome($printer);
//unset($zeina);

// printer still works even the teacher object was deleted
$printer->setStringToBePrinted("This is a test string");
echo $printer->printToScreen();

$hana = new Student('Hana Atef');

$hana->assignATempTeacher($zeina);
echo $hana->getName() . ' was assigned to this by ' . $zeina->getName() . ' | ' . $zeina->evaluateStudentHomework($hana) . '<br />';

$hana->assignATempTeacher($zeina);
echo $hana->getName() . ' was assigned to this by ' . $ohoud->getName() . ' | ' . $ohoud->evaluateStudentHomework($hana) . '<br />';
