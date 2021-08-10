<?php

namespace App\Decorator\Condiments;

use App\Decorator\CondimentBeverage;

class Soy extends CondimentBeverage
{
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Soy';
    }

    public function cost(): float
    {
        return 0.15 + $this->beverage->cost();
    }
}