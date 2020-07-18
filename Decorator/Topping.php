<?php

abstract class Topping extends Milktea
{
    public Milktea $milktea;

    public function __construct(Milktea $milktea)
    {
        $this->milktea = $milktea;
    }
}
