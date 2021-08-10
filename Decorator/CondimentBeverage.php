<?php

namespace App\Decorator;

abstract class CondimentBeverage extends Beverage
{
    protected Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }
}