<?php

namespace App\Factory\Factories;

use App\Factory\Interfaces\Pizza;
use App\Factory\Pizzas\CheesePizza;
use App\Factory\Pizzas\ClamPizza;
use App\Factory\Pizzas\PepperoniPizza;
use App\Factory\Pizzas\VeggiePizza;
use App\Factory\PizzaStore;

class NYPizzaFactory extends PizzaStore
{
    private Pizza $pizza;

    public function createPizza(string $type): Pizza
    {
        if ($type == 'cheese') {
            $this->pizza = new CheesePizza();
        } elseif ($type == 'pepperoni') {
            $this->pizza = new PepperoniPizza();
        } elseif ($type == 'clam') {
            $this->pizza = new ClamPizza();
        } elseif ($type == 'veggie') {
            $this->pizza = new VeggiePizza();
        }

        return $this->pizza;
    }
}