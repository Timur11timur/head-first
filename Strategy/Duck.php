<?php

namespace App\Strategy;

use App\Strategy\Interfaces\FlyBehaviorInterface;
use App\Strategy\Interfaces\QuackBehaviorInterface;

abstract class Duck
{
    protected FlyBehaviorInterface $flyBehavior;
    protected QuackBehaviorInterface $quackBehavior;

    public function __construct(FlyBehaviorInterface $flyBehavior, QuackBehaviorInterface $quackBehavior)
    {
        $this->flyBehavior = $flyBehavior;
        $this->quackBehavior = $quackBehavior;
    }

    abstract public function display();

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function swim()
    {
        echo "All ducks float, even decoys!";
    }
}