<?php

class Manager extends Employee
{
    public const EMPLOYEE_TYPE = 2;
    public int $overtimeHours;

    public function __construct(string $name,float $salary, int $overtimeHours)
    {
        $this->overtimeHours = $overtimeHours;
        parent::__construct($name, $salary);
    }
    public function calculateSalary()
    {
        return $this->salary + ($this->salary / 40 * $this->overtimeHours) * 2;
    }
}

/* 
Manager.php turi extendinti Employee klasę: [1 balas]
- constantos EMPLOYEE_TYPE reksme turi būti 2.
- papildomas propertis owertimeHours
- construktorius turi priimti dar papildomai owertimeHours, nepamirškite extendinti ir parent construktoriaus;
- Perrašykite calculateSalary() funkciją. Suskaičiuokite atlyginima: salary + (salary / 40 *  owertimeHours) * 2;
 */