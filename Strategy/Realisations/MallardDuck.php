<?php

namespace App\Strategy\Realisations;

use App\Strategy\Duck;
use App\Strategy\FlyBehaviors\FlyWithWings;
use App\Strategy\QuackBehaviors\Quack;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        return "I'm a real " . __CLASS__;
    }
}