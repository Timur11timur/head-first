<?php

namespace App\Decorator\Condiments;

use App\Decorator\CondimentBeverage;

class Whip extends CondimentBeverage
{
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Whip';
    }

    public function cost(): float
    {
        return 0.10 + $this->beverage->cost();
    }
}