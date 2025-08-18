<?php

namespace App\Patterns\Structural\Bridge\Grades;

use App\Patterns\Structural\Bridge\Reports\ReportBridge;

abstract class GradeReport
{
    protected ReportBridge $report;

    public function __construct(ReportBridge $report)
    {
        $this->report = $report;
    }

    public function getReport(): ReportBridge
    {
        return $this->report;
    }

    public function setReport(ReportBridge $report): void
    {
        $this->report = $report;
    }

    abstract public function showReport(): string;
}