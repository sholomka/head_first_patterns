<?php

namespace State;

class NoQuarterState implements State
{
    private GumballMachine $gumballMachine;

    public function __construct(
        GumballMachine $gumballMachine
    ) {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
        echo "You inserted a quarter" . PHP_EOL;
    }

    public function ejectQuarter(): void
    {
        echo "You haven't inserted a quarter" . PHP_EOL;
    }

    public function turnCrank(): void
    {
        echo "You turned but there's no quarter" . PHP_EOL;
    }

    public function dispense(): void
    {
        echo "You need to pay first" . PHP_EOL;
    }

    public function refill(): void
    {
        // TODO: Implement refill() method.
    }
}