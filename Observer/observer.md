<?php

abstract class AbstractObserver
{
    abstract function update(PatternSubject $subject_in);
}

class PatternObserver extends AbstractObserver
{

    public function update(PatternSubject $subject)
    {
        print('New favorite patterns: ' . $subject->getFavorites() . PHP_EOL);
    }
}

class PatternSubject
{
    private $favoritePatterns = null;
    private $observers = array();

    function attach(AbstractObserver $observer_in)
    {
        array_push($this->observers, $observer_in);
    }
    function detach(AbstractObserver $observer_in)
    {
        $key = array_search($observer_in, $this->observers);
        unset($this->observers[$key]);
    }
    function notify()
    {
        foreach ($this->observers as $obs) {
            $obs->update($this);
        }
    }
    function updateFavorites($newFavorites)
    {
        $this->favorites = $newFavorites;
        $this->notify();
    }

    function getFavorites()
    {
        return $this->favorites;
    }
}

$patternGossiper = new PatternSubject();
$patternGossipFan = new PatternObserver();
$patternGossiper->attach($patternGossipFan);
$patternGossiper->updateFavorites('1');
$patternGossiper->updateFavorites('2');
$patternGossiper->detach($patternGossipFan);
$patternGossiper->updateFavorites('3');

