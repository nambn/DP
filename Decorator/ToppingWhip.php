<?php

class ToppingWhip extends Topping
{
    public function getDescription()
    {
       return $this->milktea->getDescription() . ' with Whip';
    }

    public function getPrice()
    {
        return $this->milktea->getPrice() + 10000;
    }
}
