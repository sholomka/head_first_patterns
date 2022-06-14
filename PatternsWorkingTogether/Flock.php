<?php
declare(strict_types=1);

namespace Patterns;

class Flock implements Quackable
{
    private \ArrayObject $quackers;

    private Observable $observable;

    public function __construct()
    {
        $this->observable = new Observable($this);
//        $this->quackers = new \SplObjectStorage();
        $this->quackers = new \ArrayObject();
    }

    public function add(Quackable $quacker)
    {
//        $this->quackers->attach($quacker);
        $this->quackers->append($quacker);
    }

    public function quack(): void
    {
        $iterator = $this->quackers->getIterator();

        while ($iterator->valid()) {
            $quacker = $iterator->current();
            $quacker->quack();
            $iterator->next();
        }
    }

    public function registerObserver(Observer $observer): void
    {
        $iterator = $this->quackers->getIterator();

        while ($iterator->valid()) {
            $quacker = $iterator->current();

            $quacker->registerObserver($observer);
            $iterator->next();
        }
    }

    public function notifyObservers(): void
    {

    }
}
