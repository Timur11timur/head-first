<?php

namespace App\Decorator\Beverages;

use App\Decorator\Beverage;

class Decaf extends Beverage
{
    public function __construct()
    {
        $this->description = 'Decaf';
    }

    public function cost(): float
    {
        return 1.05;
    }
}