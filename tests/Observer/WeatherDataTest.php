<?php

namespace Tests\Observer;

use App\Observer\Observers\CurrentConditionsDisplay;
use App\Observer\Observers\ForecastDisplay;
use App\Observer\Observers\StatisticDisplay;
use App\Observer\WeatherData;
use PHPUnit\Framework\TestCase;

class WeatherDataTest extends TestCase
{
    /** @test */
    public function check_CurrentConditionsDisplay()
    {
        $subject = new WeatherData();
        $observer = new CurrentConditionsDisplay($subject);

        $output = 'Current conditions: 80F degrees and 65% humidity<br>';
        $this->expectOutputString($output);
        $subject->setMeasurements(80, 65, '30.4f');

        $output .= 'Current conditions: 82F degrees and 70% humidity<br>';
        $this->expectOutputString($output);
        $subject->setMeasurements(82, 70, '29.2f');

        $output .= 'Current conditions: 78F degrees and 90% humidity<br>';
        $this->expectOutputString($output);
        $subject->setMeasurements(78, 90, '29.2f');
    }

    /** @test */
    public function check_StatisticDisplay()
    {
        $subject = new WeatherData();
        $observer = new StatisticDisplay($subject);

        $output = 'Avg/Max/Min temperature = 80.0/80.0/80.0<br>';
        $this->expectOutputString($output);
        $subject->setMeasurements(80, 65, '30.4f');

        $output .= 'Avg/Max/Min temperature = 81.0/82.0/80.0<br>';
        $this->expectOutputString($output);
        $subject->setMeasurements(82, 70, '29.2f');

        $output .= 'Avg/Max/Min temperature = 80.0/82.0/78.0<br>';
        $this->expectOutputString($output);
        $subject->setMeasurements(78, 90, '29.2f');
    }

    /** @test */
    public function check_ForecastDisplay()
    {
        $subject = new WeatherData();
        $observer = new ForecastDisplay($subject);

        $output = 'Forecast: Improving weather on the way!<br>';
        $this->expectOutputString($output);
        $subject->setMeasurements(80, 65, '30.4f');

        $output .= 'Forecast: Watch out for cooler, rainy weather<br>';
        $this->expectOutputString($output);
        $subject->setMeasurements(82, 70, '29.2f');

        $output .= 'Forecast: More of the same<br>';
        $this->expectOutputString($output);
        $subject->setMeasurements(78, 90, '29.2f');
    }

    /** @test */
    public function check_allDisplays()
    {
        $subject = new WeatherData();
        $observer = new CurrentConditionsDisplay($subject);
        $observer2 = new StatisticDisplay($subject);
        $observer3 = new ForecastDisplay($subject);


        $output = 'Current conditions: 80F degrees and 65% humidity<br>';
        $output .= 'Avg/Max/Min temperature = 80.0/80.0/80.0<br>';
        $output .= 'Forecast: Improving weather on the way!<br>';
        $this->expectOutputString($output);
        $subject->setMeasurements(80, 65, '30.4f');
    }
}
