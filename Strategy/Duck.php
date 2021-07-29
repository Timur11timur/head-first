<?php

namespace App\Strategy;

use App\Strategy\Interfaces\FlyBehaviorInterface;
use App\Strategy\Interfaces\QuackBehaviorInterface;

abstract class Duck
{
    protected FlyBehaviorInterface $flyBehavior;
    protected QuackBehaviorInterface $quackBehavior;

    abstract public function display();

    public function performFly()
    {
        return $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        return $this->quackBehavior->quack();
    }

    public function swim()
    {
        return "All ducks float, even decoys!";
    }
}