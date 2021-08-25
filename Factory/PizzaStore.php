<?php

namespace App\Factory;

use App\Factory\Interfaces\Pizza;

class PizzaStore
{
    private SimplePizzaFactory $factory;

    public function __construct(SimplePizzaFactory $factory)
    {
        $this->factory = $factory;
    }

    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->factory->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}