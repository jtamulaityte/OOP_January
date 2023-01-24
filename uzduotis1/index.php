<?php

include_once 'Employee.php';
include_once 'Intern.php';
include_once 'Manager.php';

$intern = new Intern('Jonas', 1000);
echo $intern . PHP_EOL;
echo $intern->calculateSalary() . PHP_EOL;
echo Intern::getTypeDescription() .PHP_EOL;

$manager = new Manager('Rasa', 1050, 6);
echo $manager . PHP_EOL;
echo $manager->calculateSalary() . PHP_EOL;
echo Manager::getTypeDescription() .PHP_EOL;

$internClone = clone $intern;
echo $internClone . PHP_EOL;
echo $internClone->calculateSalary() . PHP_EOL;
echo Intern::getTypeDescription() . PHP_EOL;

/* Sukurkite Intern ir Manager objektus.    [0.5 balo]
Išspausdinkite tiesiogiai abu objektus
Išveskite jų atlyginimus.
Išveskite getTypeDescription;
Paklonuokite intern sukurtą objektą
 */

