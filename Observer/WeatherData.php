<?php

namespace App\Observer;

use App\Observer\Interfaces\ObserverInterface;
use App\Observer\Interfaces\SubjectInterface;

class WeatherData implements SubjectInterface
{
    private array $arrayList = [];
    private int $temp;
    private int $humidity;
    private string $pressure;


    public function registerObserver(ObserverInterface $observer): void
    {
        $this->arrayList[] = $observer;
    }

    public function removeObserver(ObserverInterface $observer): void
    {
        $index = array_search($observer, $this->arrayList);
        if ($index !== false) {
            unset($this->arrayList[$index]);
        }
    }

    public function notifyObserver(): void
    {
        foreach ($this->arrayList as $observer) {
            $observer->update($this->temp, $this->humidity, $this->pressure);
        }
    }

    private function measurementsChanged(): void
    {
        $this->notifyObserver();
    }

    public function setMeasurements(int $temp, int $humidity, string $pressure): void
    {
        $this->temp = $temp;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }
}