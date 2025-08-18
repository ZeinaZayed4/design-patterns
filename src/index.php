<?php

use App\Patterns\Structural\Bridge\Grades\Grade1Report;
use App\Patterns\Structural\Bridge\Grades\Grade2Report;
use App\Patterns\Structural\Bridge\Grades\Grade3Report;
use App\Patterns\Structural\Bridge\Reports\HTMLReport;
use App\Patterns\Structural\Bridge\Reports\PlainTextReport;
use App\Patterns\Structural\Bridge\Reports\XMLReport;

require_once __DIR__ . '/../vendor/autoload.php';

$report1Tool = new Grade1Report(
    new HTMLReport(),
);
echo $report1Tool->showReport();

$report1Tool->setReport(new XMLReport());
echo $report1Tool->showReport();

$report1Tool->setReport(new PlainTextReport());
echo $report1Tool->showReport();

echo '<hr />';

$report2Tool = new Grade2Report(
    new HTMLReport(),
);
echo $report2Tool->showReport();

$report2Tool->setReport(new XMLReport());
echo $report2Tool->showReport();

$report2Tool->setReport(new PlainTextReport());
echo $report2Tool->showReport();

echo '<hr />';

$report3Tool = new Grade3Report(
    new HTMLReport(),
);
echo $report3Tool->showReport();

$report3Tool->setReport(new XMLReport());
echo $report3Tool->showReport();

$report3Tool->setReport(new PlainTextReport());
echo $report3Tool->showReport();
