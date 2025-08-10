<?php

use App\Patterns\Creational\FactoryMethod\DialogExample\Dialogs\SystemDialog;
use App\Patterns\Creational\FactoryMethod\DialogExample\Dialogs\WebDialog;
use App\Patterns\Creational\FactoryMethod\DialogExample\Dialogs\MobileDialog;

require_once __DIR__ . '/../vendor/autoload.php';

$systemDialog = new SystemDialog();
$webDialog = new WebDialog();
$mobileDialog = new MobileDialog();
echo $systemDialog->renderDialog();
echo '<hr />';
echo $webDialog->renderDialog()    . '<br />';
echo '<hr />';
echo $mobileDialog->renderDialog() . '<br />';
