<?php

class ToppingSoy extends Topping
{
    public function getDescription()
    {
       return $this->milktea->getDescription() . ' with Soy';
    }

    public function getPrice()
    {
        return $this->milktea->getPrice() + 7000
        ;
    }
}
