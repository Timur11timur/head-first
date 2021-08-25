<?php

namespace App\Factory\Pizzas;

use App\Factory\Interfaces\Pizza;

class VeggiePizza implements Pizza
{
    public function prepare()
    {
        echo __METHOD__;
    }

    public function bake()
    {
        echo __METHOD__;
    }

    public function cut()
    {
        echo __METHOD__;
    }

    public function box()
    {
        echo __METHOD__;
    }
}