<?php

namespace App\Patterns\Structural\Adapter\SMSAdapter;

class SMSDeliveryStatus
{
    const string PENDING = '1';
    const string SENT = '2';
    const string DELIVERED = '3';
    const string FAILED = '4';
}