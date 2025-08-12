<?php

namespace App\Patterns\Creational\Prototype\Employee;

use App\Patterns\Creational\Prototype\Employee\Privileges\Privileges;
use App\Patterns\Creational\Prototype\Employee\Privileges\Types\ServerRoomPrivilege;
use App\Patterns\Creational\Prototype\Employee\Privileges\Types\WebProjectPrivilege;

class EmployeePrototype implements Prototype
{
    private ProfileData $profileData;
    private Salary $salary;
    private Privileges $privileges;

    public function __construct(ProfileData $profileData, Salary $salary, Privileges $privileges)
    {
        $this->profileData = $profileData;
        $this->salary = $salary;
        $this->privileges = $privileges;
    }

    public function getProfileData(): ProfileData
    {
        return $this->profileData;
    }

    public function getSalary(): Salary
    {
        return $this->salary;
    }

    public function getPrivileges(): Privileges
    {
        return $this->privileges;
    }

    public function __clone()
    {
        $this->privileges->clearPrivileges();
        $this->privileges->addPrivilege(new WebProjectPrivilege());
        $this->privileges->addPrivilege(new ServerRoomPrivilege());

        $this->salary->setTax(0.10);
        $this->salary->setSalary(20000);
        $this->salary->setMedicalInsurance(2500);

        $this->profileData->setAddress(null);
        $this->profileData->setAge(20);
        $this->profileData->setMobileNumber('0');
        $this->profileData->setTelephoneNumber('0');
        $this->profileData->setSlackAccountName('slack.account');
        $this->profileData->setName('Default employee name');
    }
}