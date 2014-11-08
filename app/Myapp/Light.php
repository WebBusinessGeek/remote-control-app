<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/7/14
 * Time: 11:43 PM
 */

namespace App\MyApp;


class Light implements ControllableInterface {

    use ControllableTrait;

    public function activate($presetOrState)
    {
        //check using notAlreadySet(), then check using isValidPreset()
        //call activate on the state object stored in the array
    }

    public function deactivate()
    {

    }

    public function undo()
    {

    }



}