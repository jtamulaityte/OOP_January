<?php

class SubscriberPriceCalculator implements TotalCalculatorInterface
{
    public function calculatePrice(array $tickets) 
    {
        $ticketPrices = array_map(function ($ticket) {
            return $ticket->price; }, $tickets);
        return array_sum($ticketPrices) * 0.9;    
    }
}

/* 2.3. Realizuokite 3 skirtingus Kainos skaičiavimus: [1.5 balo]
    - standartinis -> praeina per visus ticketus ir sudeda ju kainą
    - su subscriberio nuolaida -> praiena per visus ticketus, sudeda ju suma ir taiko  10% nuolaida
    - naujo vartotojo nuolaida -> praeina per visus ticket, taiko nuolaida tik pirmam itemui 20%

    Siūlomi klasių pavadinimai:

    - StandardPriceCalculator;
    - SubscriberPriceCalculator;
    - NewCustomerPriceCalculator; */