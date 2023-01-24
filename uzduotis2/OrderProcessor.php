<?php

class OrderProcessor
{
    public array $items;
    public TotalCalculatorInterface $calculator;

    public function __construct(TotalCalculatorInterface $calculator) 
    {
        $this->calculator = $calculator;
    }

    public function addItem(CinemaTicket $ticket): void
    {
        $this->items[] = $ticket;
    }
    public function getList(): array
    {
        return $this->items;
    }
    public function calculatePrice(): float
    {
        return $this->calculator->calculatePrice($this->items);
    }
}


/* 2.4. Sukurkite klasę OrderProcessor: [1 balas]
    turi savyje properčius:
        - items: CinemaTicket[]
        - calculator;
    turi metodus:
        - addItem(CinemaTicket $ticket)
        - getList() // grąžina items masyvą
        - calculatePrice(): float;
    Per construktorių yra paduodamas calculatorius! */