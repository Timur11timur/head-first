<?php

namespace App\Strategy\FlyBehaviors;

use App\Strategy\Interfaces\FlyBehaviorInterface;

class FlyRocketPowered implements FlyBehaviorInterface
{
    public function fly()
    {
        return "I'm flying with a rocket!";
    }
}