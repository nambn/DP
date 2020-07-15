<?php

class Publisher
{
    private $paper = '';

    private $clients = [];

    public function register(Client $client)
    {
        array_push($this->clients, $client);
        echo 'A new client with name ' . $client->getName() . ' has registed.';
    }

    public function cancel(Client $client)
    {
        $key = array_search($client, $this->clients);
        unset($this->clients[$key]);
        echo 'Client with name ' . $client->getName() . ' has unsubscribed.';
    }

    public function broadcast()
    {
        foreach ($this->clients as $client) {
            $client->receive($this->paper);
        }
    }

    public function setPaper(String $s)
    {
        $this->paper = $s;
        $this->broadcast();
    }

    public function getPaper()
    {
        return $this->paper;
    }
}
