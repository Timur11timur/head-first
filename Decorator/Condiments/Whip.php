<?php

namespace App\Decorator\Condiments;

use App\Decorator\Beverage;
use App\Decorator\CondimentBeverage;

class Whip extends CondimentBeverage
{
    private Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Whip';
    }

    public function cost(): float
    {
        return 0.10 + $this->beverage->cost();
    }
}