<?php

namespace App\Observer\Observers;

use App\Observer\Interfaces\DisplaElementInterface;
use App\Observer\Interfaces\ObserverInterface;
use App\Observer\Interfaces\SubjectInterface;

class StatisticDisplay implements ObserverInterface, DisplaElementInterface
{
    private array $tempArray;
    private SubjectInterface $weatherData;

    public function __construct(SubjectInterface $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(int $temp, int $humidity, string $pressure): void
    {
        $this->tempArray[] = $temp;
        $this->display();
    }

    public function display(): void
    {
        echo "Avg/Max/Min temperature = " . $this->formatData(array_sum($this->tempArray)/count($this->tempArray)) . "/" . $this->formatData(max($this->tempArray)) . "/" . $this->formatData(min($this->tempArray)) . "<br>";
    }

    private function formatData($num): string
    {
        return number_format($num,1,'.','');
    }
}