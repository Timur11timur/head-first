<?php

namespace App\Strategy\FlyBehaviors;

use App\Strategy\Interfaces\FlyBehaviorInterface;

class FlyNoWay implements FlyBehaviorInterface
{
    public function fly()
    {
        return "I can't fly";
    }
}