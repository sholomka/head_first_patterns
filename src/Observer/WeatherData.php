<?php
declare(strict_types=1);

namespace Observer;

use Doctrine\Common\Collections\ArrayCollection;

class WeatherData implements Subject
{
    private float $temperature;
    private float $humidity;
    private float $pressure;

    /**
     * @var ArrayCollection|Observer[]
     */
    private ArrayCollection $observers;

    /**
     * @param ArrayCollection|Observer[] $observers
     */
    public function __construct()
    {
        $this->observers = new ArrayCollection();
    }

    public function registerObserver(Observer $observer)
    {
        $this->observers->add($observer);
    }

    public function removeObserver(Observer $observer)
    {
        $this->observers->remove($observer);
    }

    public function notifyObservers()
    {
       foreach ($this->observers as $observer) {
           $observer->update();
       }
    }

    private function measurementsChanged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->measurementsChanged();
    }

    /**
     * @return float
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }

    /**
     * @return float
     */
    public function getHumidity(): float
    {
        return $this->humidity;
    }

    /**
     * @return float
     */
    public function getPressure(): float
    {
        return $this->pressure;
    }
}
