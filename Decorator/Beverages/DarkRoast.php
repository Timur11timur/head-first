<?php

namespace App\Decorator\Beverages;

use App\Decorator\Beverage;

class DarkRoast extends Beverage
{
    public function __construct()
    {
        $this->description = 'Dark Roast Coffee';
    }

    public function cost(): float
    {
        return 0.99;
    }
}