<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/7/14
 * Time: 11:02 PM
 */

namespace App\MyApp;


class Remote {

    public $slots = [];

    public $currentPreset = 1;

    public $presets = [];

    public $lastSlotPressed;

    public $lastPresetUsed;

    public function activate($slot, $preset)
    {
        $this->lastSlotPressed = $slot;

        $this->lastPresetUsed = $preset;

        $this->slots[$slot]->activate($preset);
    }

    public function setPreset($preset)
    {
        $this->currentPreset = $preset;
    }

    public function getPreset($preset)
    {
        return $this->currentPreset;
    }

    public function setSlot(ControllableInterface $controllable, $slot = null)
    {
        //if array less than  7
        if(!isset($slot) && $this->checkSlotLength(count($this->slots)))
        {
            $this->slots[] = $controllable;
        }

        //if $slot <= 7 - then add $controllable to the specified slot
        if()
        //if no slot specified add to the slot
    }

    public function checkSlotLength($number)
    {
        return $number < 7;
    }



}