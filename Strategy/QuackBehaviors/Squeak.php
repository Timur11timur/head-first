<?php

namespace App\Strategy\QuackBehaviors;

use App\Strategy\Interfaces\QuackBehaviorInterface;

class Squeak implements QuackBehaviorInterface
{
    public function quack()
    {
        echo "Squeak";
    }
}