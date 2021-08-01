<?php

namespace App\Observer\Interfaces;

interface SubjectInterface
{
    public function registerObserver(ObserverInterface $observer): void;

    public function removeObserver(ObserverInterface $observer): void;

    public function notifyObserver(): void;
}