<?php

namespace App\Factory;

use App\Factory\Factories\SimplePizzaFactory;
use App\Factory\Interfaces\Pizza;

abstract class PizzaStore
{
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    abstract function createPizza(string $type);
}