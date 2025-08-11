<?php

use App\Patterns\Creational\Builder\Builders\ComputerCSBuilder;
use App\Patterns\Creational\Builder\Builders\ComputerXLBuilder;
use App\Patterns\Creational\Builder\Director;

require_once __DIR__ . '/../vendor/autoload.php';

$director = new Director(new ComputerCSBuilder());
$computer = $director->makeComputer();

echo '<pre>';
var_dump($computer);
echo '</pre>';

echo '<hr />';

$director->changeBuilder(new ComputerXLBuilder());
$computer = $director->makeComputer();

echo '<pre>';
var_dump($computer);
echo '</pre>';
