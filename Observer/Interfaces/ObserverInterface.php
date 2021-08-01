<?php

namespace App\Observer\Interfaces;

interface ObserverInterface
{
    public function update(int $temp, int $humidity, string $pressure): void;
}