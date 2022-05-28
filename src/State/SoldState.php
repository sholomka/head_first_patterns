<?php

namespace State;

class SoldState implements State
{
    private GumballMachine $gumballMachine;

    public function __construct(
        GumballMachine $gumballMachine
    ) {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo "Please wait, we're already giving you a gumball" . PHP_EOL;
    }

    public function ejectQuarter(): void
    {
        echo "Sorry, you already turned the crank" . PHP_EOL;
    }

    public function turnCrank(): void
    {
        echo "You turned but there are no gumballs" . PHP_EOL;
    }

    public function dispense(): void
    {
        $this->gumballMachine->releaseBall();

        if ($this->gumballMachine->getCount() === 0) {
            echo "Oops, out of gumballs" . PHP_EOL;
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        }
    }

    public function refill(): void
    {
        // TODO: Implement refill() method.
    }
}
