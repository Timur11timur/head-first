<?php

namespace App\Factory\Pizzas;

use App\Factory\Interfaces\Pizza;

class CheesePizza implements Pizza
{
    public function prepare()
    {
        echo explode('::', __METHOD__)[1] . PHP_EOL;
    }

    public function bake()
    {
        echo explode('::', __METHOD__)[1] . PHP_EOL;
    }

    public function cut()
    {
        echo explode('::', __METHOD__)[1] . PHP_EOL;
    }

    public function box()
    {
        echo explode('::', __METHOD__)[1] . PHP_EOL;
    }
}