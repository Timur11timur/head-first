<?php

namespace App\Strategy\Realisations;

use App\Strategy\Duck;
use App\Strategy\FlyBehaviors\FlyNoWay;
use App\Strategy\QuackBehaviors\Quack;

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        return "I'm a real " . str_replace(__NAMESPACE__ . '\\', '', __CLASS__);
    }
}