<?php

namespace App\Entity;

class Order
{


    public function __construct(private int $amount)
    {
    }

    public function getAmount(): int
    {
        return $this->amount;
    }
}