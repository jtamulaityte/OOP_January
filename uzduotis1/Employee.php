<?php

class Employee
{
    public const EMPLOYEE_TYPE = 1;
    public string $name;
    protected float $salary;
    protected int $experience;
    private int $id;

    public function __construct(string $name,float $salary) 
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->id = rand();
    }
    public function getExperience()
    {
        return $this->experience;
    }
    public function setExperience(string $experience)
    {
        $this->experience = $experience;
    }
    public function getId()
    {
        return $this->id;
    }
    public function calculateSalary()
    {
        return $this->salary;
    }
public function __toString()
    {
        return "Darbuotojas {$this->id}: {$this->name} - {$this->salary} EUR";
    }

    public function __clone() 
    {
        $this->id = 0;
    }

    public static function getTypeDescription(): string
    {
        return "Darbuotojo tipas " . static::EMPLOYEE_TYPE;
    }
}



/* 
1. Employee.php yra base klasė. Employee class reikalavimai:

- klase turi turėti constantą EMPLOYEE_TYPE su verte 1. [0.25 balo]
- klasė turi turėti 4 skirtintas propertis: [0.5 balo]
-- public name
-- protected salary
-- protected experience
-- private id.
- klasės konstruktorius turi priimti name ir salary. ir Id verte konstruktoriuje turi būti nustatyta rand():
https://www.php.net/manual/en/function.rand.php [0.5 balo]

- Getter ir Setter turi būti sukurtas experience properčiui. [0.25 balo]
- Getter methodas turi būti sukurtas id properčiui [0.25 balo]
- Metodas public calculateSalary() turi grąžinti salary reikšmę [0.5 balo]
- Magic methodas toString turi grąžinti string: "Darbuotojas {id}: {name} - {salary} EUR" [0.25 balo]
- Magic methodas clone turi pakeisti id verte į 0 [0.25 balo]
- static methodas getTypeDescription() gražina string "Darbuotojo tipas {constantos verte}" [0.5 balo] */