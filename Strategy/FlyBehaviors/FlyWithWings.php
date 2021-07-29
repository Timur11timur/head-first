<?php

namespace App\Strategy\FlyBehaviors;

use App\Strategy\Interfaces\FlyBehaviorInterface;

class FlyWithWings implements FlyBehaviorInterface
{
    public function fly()
    {
        return "I'm flying!!!";
    }
}