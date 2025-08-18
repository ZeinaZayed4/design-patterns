<?php

namespace App\Patterns\Structural\Bridge\Reports;

class XMLReport implements ReportBridge
{
    public function showGrade1Report(): string
    {
        return '<strong>XML:</strong> This is a grade 1 report<br />';
    }

    public function showGrade2Report(): string
    {
        return '<strong>XML:</strong> This is a grade 2 report<br />';
    }

    public function showGrade3Report(): string
    {
        return '<strong>XML:</strong> This is a grade 3 report<br />';
    }
}