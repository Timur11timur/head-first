<?php

namespace App\Strategy\QuackBehaviors;

use App\Strategy\Interfaces\QuackBehaviorInterface;

class Quack implements QuackBehaviorInterface
{
    public function quack()
    {
        return "Quack";
    }
}