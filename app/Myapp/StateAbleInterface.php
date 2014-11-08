<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/7/14
 * Time: 10:09 PM
 */

namespace App\MyApp;


interface StateAbleInterface {

    public function activate($name, $location);

    public function giveState();

    public function info($name, $location);
}