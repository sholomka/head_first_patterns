<?php
declare(strict_types=1);

namespace Observer;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private Subject $subject;
    private float $temperature;
    private float $humidity;
    private float $pressure;

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->registerObserver($this);
    }

    public function update()
    {
       $this->temperature = $this->subject->getTemperature();
       $this->humidity = $this->subject->getHumidity();
       $this->pressure = $this->subject->getPressure();

       $this->display();
    }

    public function display()
    {
        echo sprintf('%s - %s - %s%s', $this->temperature, $this->humidity, $this->pressure, PHP_EOL);
    }
}
