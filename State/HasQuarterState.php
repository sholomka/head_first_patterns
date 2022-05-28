<?php

namespace State;

class HasQuarterState implements State
{
    private GumballMachine $gumballMachine;
    private int $randomWinner;

    public function __construct(
        GumballMachine $gumballMachine
    ) {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo "You can't insert another quarter" . PHP_EOL;
    }

    public function ejectQuarter(): void
    {
        echo "Quarter returned" . PHP_EOL;
    }

    public function turnCrank(): void
    {
        echo "You turned..." . PHP_EOL;
        $winner = rand(0 , 10);
        if ($winner === 10 && $this->gumballMachine->getCount() > 1) {
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }

    public function dispense(): void
    {
        echo "No gumball dispensed" . PHP_EOL;
    }

    public function refill(): void
    {
        // TODO: Implement refill() method.
    }
}