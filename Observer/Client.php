<?php

class Client
{
    private $name;

    public function __construct(String $name)
    {
        $this->name = $name;
    }

    public function receive($paper)
    {
        echo 'I am ' . $this->name . '. I received a paper with title: ' . $paper . PHP_EOL;
    }

    public function getName()
    {
        return $this->name;
    }
}
