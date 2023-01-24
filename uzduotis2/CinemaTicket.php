<?php

class CinemaTicket
{
    public string $name;
    public string $place;
    public DateTime $date;
    public int $price;

    public function __construct(string $name, string $place, DateTime $date, int $price)
    {
        $this->name = $name;
        $this->place = $place;
        $this->date = $date;
        $this->price = $price;
    }
}

/* 2.1. Sukurkite CinemaTicket class [1 balas]
    - filmo pavadinimas: string
    - vieta: string
    - seanso data: Datetime
    - kaina: float
    - constructorius turi priimti visus properčius
 */