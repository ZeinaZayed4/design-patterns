<?php

namespace App\Patterns\Creational\Prototype\Employee\Privileges\Types;

interface PrivilegeTypeInterface
{
    public function enable(): true;
    public function disable(): true;
}