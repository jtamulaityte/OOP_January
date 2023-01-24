<?php

include_once 'TotalCalculatorInterface.php';
include_once 'CinemaTicket.php';
include_once 'StandardPriceCalculator.php';
include_once 'SubscriberPriceCalculator.php';
include_once 'NewCustomerPriceCalculator.php';
include_once 'OrderProcessor.php';


$ticket1 = new CinemaTicket("Jonas", "Kaunas", new DateTime, 10);
$ticket2 = new CinemaTicket("Petras", "Vilnius", new DateTime, 14);
$ticket3 = new CinemaTicket("Rasa", "Klaipeda", new DateTime, 8);

$standardCalc = new StandardPriceCalculator;
$subscribeCalc = new SubscriberPriceCalculator;
$newCustomerCalc = new NewCustomerPriceCalculator;

$orderProcessor1 = new OrderProcessor($standardCalc);
$orderProcessor1->addItem($ticket1);
$orderProcessor1->addItem($ticket2);
$orderProcessor1->addItem($ticket3);

$orderProcessor2 = new OrderProcessor($subscribeCalc);
$orderProcessor2->addItem($ticket1);
$orderProcessor2->addItem($ticket2);
$orderProcessor2->addItem($ticket3);

$orderProcessor3 = new OrderProcessor($newCustomerCalc);
$orderProcessor3->addItem($ticket1);
$orderProcessor3->addItem($ticket2);
$orderProcessor3->addItem($ticket3);

echo "Standartinis užsakymas: " . $orderProcessor1->calculatePrice() . PHP_EOL;
echo "Prenumeratoriaus užsakymas: " . $orderProcessor2->calculatePrice() . PHP_EOL;
echo "Naujo pirkėjo užsakymas: " . $orderProcessor3->calculatePrice() . PHP_EOL;

/* 2.5. Sukurkite 3 CinemaTicket su kainomis: [1 balas]
    1=> 10 EUR; 2=> 14 EUR; 3=> 8 EUR

    Sukurkite 3 Skaičiavimo strategijų objektus
    Sukurkite 3 OrderProcessor objektus ir pabandykite sudėti jiems visiems šiuo itemus naudodami addItem bei pritaikyti skirtingas skaičiavimo strategijas.
    Išveskite kiekvieno OrderioProcessor total kainą.

Pastebėjimai:
    - Klasės ir interface turi gyvuoti atskiruose failuose.
    - Turi būti naudojami namespace ir composer autoloaderis [PAPILDOMAI + 1 balas]  */