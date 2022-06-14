<?php
declare(strict_types=1);

namespace Patterns;

class GooseAdapter implements Quackable
{
    private Goose $goose;
    private Observable $observable;

    public function __construct(Goose $goose)
    {
        $this->goose = $goose;
        $this->observable = new Observable($this);
    }

    public function quack(): void
    {
        $this->goose->honk();
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
