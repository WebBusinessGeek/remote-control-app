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

    public function getPreset()
    {
        return $this->currentPreset;
    }

    public function setSlot(ControllableInterface $controllable, $slot = null)
    {
       return (!is_null($slot)) ? $this->noSlotSpecified($controllable) : $this->slotSpecified($controllable, $slot);
    }

    public function noSlotSpecified(ControllableInterface $controllable)
    {
        return $this->checkAgainstSlotLimit(count($this->slots)) ? $this->slots[] = $controllable : 'No more room';
    }

    public function slotSpecified($controllable, $slot)
    {
        return $this->checkAgainstSlotLimit($slot) ? $this->slots[$slot] = $controllable : 'Invalid Slot';
    }

    public function checkAgainstSlotLimit($number)
    {
        return $number < 7;
    }

    



}