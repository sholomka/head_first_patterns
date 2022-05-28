<?php

namespace State;

class SoldOutState implements State
{
    private GumballMachine $gumballMachine;

    public function __construct(
        GumballMachine $gumballMachine
    ) {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo "You can't insert a quarter, the machine is sold out" . PHP_EOL;
    }

    public function ejectQuarter(): void
    {
        echo "You can't eject, you haven't inserted a quarter yet" . PHP_EOL;
    }

    public function turnCrank(): void
    {
        echo "You turned but there are no gumballs" . PHP_EOL;
    }

    public function dispense(): void
    {
        echo "No gumball dispensed" . PHP_EOL;
    }

    public function refill(): void
    {
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }
}
