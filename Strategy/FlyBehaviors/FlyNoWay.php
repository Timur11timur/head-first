<?php

namespace App\Strategy\FlyBehaviors;

use App\Strategy\Interfaces\FlyBehaviorInterface;

class FlyNoWay implements FlyBehaviorInterface
{
    public function fly()
    {
        echo "I can't fly";
    }
}