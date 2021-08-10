<?php

namespace App\Decorator\Condiments;

use App\Decorator\CondimentBeverage;

class Mocha extends CondimentBeverage
{
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Mocha';
    }

    public function cost(): float
    {
        return 0.20 + $this->beverage->cost();
    }
}