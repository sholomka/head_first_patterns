<?php
declare(strict_types=1);

namespace Patterns;

class RubberDuck implements Quackable
{
    private Observable $observable;

    public function __construct()
    {
        $this->observable = new Observable($this);
    }

    public function quack(): void
    {
        echo "Squeak" . PHP_EOL;
        $this->notifyObservers();
    }

    public function registerObserver(Observer $observer): void
    {
        $this->observable->registerObserver($observer);
    }

    public function notifyObservers(): void
    {
        $this->observable->notifyObservers();
    }
}
