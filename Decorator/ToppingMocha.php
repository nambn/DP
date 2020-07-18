<?php

class ToppingMocha extends Topping
{
    public function getDescription()
    {
       return $this->milktea->getDescription() . ' with Mocha';
    }

    public function getPrice()
    {
        return $this->milktea->getPrice() + 5000;
    }
}
