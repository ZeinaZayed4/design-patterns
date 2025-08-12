<?php

namespace App\Patterns\Creational\Prototype\Employee\Privileges\Types;

class ServerRoomPrivilege implements PrivilegeTypeInterface
{

    public function enable(): true
    {
        return true;
    }

    public function disable(): true
    {
        return true;
    }
}