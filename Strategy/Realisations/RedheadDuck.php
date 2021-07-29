<?php

namespace App\Strategy\Realisations;

use App\Strategy\Duck;
use App\Strategy\FlyBehaviors\FlyWithWings;
use App\Strategy\QuackBehaviors\Quack;

class RedheadDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        return "I'm a real " . str_replace(__NAMESPACE__ . '\\', '', __CLASS__);
    }
}