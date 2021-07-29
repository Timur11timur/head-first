<?php

namespace App\Strategy\QuackBehaviors;

use App\Strategy\Interfaces\QuackBehaviorInterface;

class MuteQuack implements QuackBehaviorInterface
{
    public function quack()
    {
        return "<< Silence >>";
    }
}