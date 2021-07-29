<?php

namespace App\Strategy\FlyBehaviors;

use App\Strategy\Interfaces\FlyBehaviorInterface;

class FlyWithWings implements FlyBehaviorInterface
{
    public function __construct()
    {
        $test = 1;
    }

    public function fly()
    {
        echo "I'm flying!!!";
    }
}