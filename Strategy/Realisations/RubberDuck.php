<?php

namespace App\Strategy\Realisations;

use App\Strategy\Duck;
use App\Strategy\FlyBehaviors\FlyNoWay;
use App\Strategy\QuackBehaviors\Squeak;

class RubberDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Squeak();
    }

    public function display()
    {
        return "I'm not a real duck";
    }
}