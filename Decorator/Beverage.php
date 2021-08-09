<?php

namespace App\Decorator;

abstract class Beverage
{
    protected string $description = 'Unknown Beverage';

    public function getDescription(): string
    {
        return $this->description;
    }

    public abstract function cost(): float;
}