<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/7/14
 * Time: 10:11 PM
 */

namespace App\MyApp;


interface ControllableInterface {

    public function activate($presetOrState);

    public function deactivate();

    public function undo();



}