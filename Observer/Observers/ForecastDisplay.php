<?php

namespace App\Observer\Observers;

use App\Observer\Interfaces\DisplaElementInterface;
use App\Observer\Interfaces\ObserverInterface;
use App\Observer\Interfaces\SubjectInterface;

class ForecastDisplay implements ObserverInterface, DisplaElementInterface
{
    private string $lastPressure = '0f';
    private string $currentPressure;
    public function __construct(SubjectInterface $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(int $temp, int $humidity, string $pressure): void
    {
        $this->currentPressure = $pressure;
        $this->display();
    }

    public function display(): void
    {
        if ((int) $this->lastPressure > (int) $this->currentPressure) {
            echo "Forecast: Watch out for cooler, rainy weather<br>";
        } elseif((int) $this->lastPressure == (int) $this->currentPressure) {
            echo "Forecast: More of the same<br>";
        } else {
            echo "Forecast: Improving weather on the way!<br>";
        }
        $this->lastPressure = $this->currentPressure;
    }
}