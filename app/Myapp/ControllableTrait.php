<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/7/14
 * Time: 10:17 PM
 */

namespace App\MyApp;


trait ControllableTrait {

    public $deactivator;

    public $activator;

    public $activated = false;

    public $deactivated = true;

    public $currentState = 'off';

    public $previousState = [];

    public $states = [];

    public $name;

    public $location;

    public function setNameAndLocation($name, $location)
    {
        $this->name = $name;
        $this->location = $location;
    }

    public function setCurrentState($state)
    {
        $this->currentState = $state;
    }

    public function getCurrentState()
    {
        return $this->currentState;
    }

    public function getPreviousState()
    {
        return end($this->previousState);
    }

    public function usePreviousState()
    {
        return array_pop($this->previousState);
    }

    public function setState(StateAbleInterface $state)
    {
        return (count($this->states) < 5) ? $this->states[] = $state : 'no more room';
    }

    public function getStates()
    {
        return $this->states;
    }

    public function getDeactivator()
    {
        return $this->deactivator;
    }

    public function getActivator()
    {
        return (!is_null($this->activator)) ? $this->activator : false;
    }

    public function isActivated()
    {
        return $this->activated;
    }

    public function isDeactivated()
    {
        return $this->deactivated;
    }

    public function isAlreadySet($givenState)
    {
        return $this->currentState == $givenState;
    }

    public function notAlreadySet($givenState)
    {
        return $this->currentState != $givenState;
    }

    public function isValidPreset($preset)
    {
        return ($this->states[$preset] != $this->deactivator) && (isset($this->states[$preset]));
    }




}