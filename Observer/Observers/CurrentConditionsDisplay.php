<?php

namespace App\Observer\Observers;

use App\Observer\Interfaces\DisplaElementInterface;
use App\Observer\Interfaces\ObserverInterface;
use App\Observer\Interfaces\SubjectInterface;

class CurrentConditionsDisplay implements ObserverInterface, DisplaElementInterface
{
    private int $temperature;
    private int $humidity;
    private SubjectInterface $weatherData;

    public function __construct(SubjectInterface $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(int $temp, int $humidity, string $pressure): void
    {
        $this->temperature = $temp;
        $this->humidity = $humidity;
        $this->display();
    }

    public function display(): void
    {
        echo "Current conditions: " . $this->temperature . "F degrees and " . $this->humidity . "% humidity<br>";
    }
}