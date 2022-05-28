<?php

namespace State;

class GumballMachine
{
    private State $soldOutState;
    private State $soldState;
    private State $hasQuarterState;
    private State $noQuarterState;
    private State $winnerState;

    private State $state;
    private int $count = 0;

    /**
     * @param int $numberGumballs
     */
    public function __construct(int $numberGumballs)
    {
        $this->soldOutState = new SoldOutState($this);
        $this->soldState = new SoldState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->winnerState = new WinnerState($this);

        $this->count = $numberGumballs;
        if ($numberGumballs > 0) {
            $this->state = $this->noQuarterState;
        } else {
            $this->state = $this->soldOutState;
        }
    }

    public function insertQuarter(): void
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter(): void
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank(): void
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function releaseBall(): void
    {
        echo "A gumball comes rolling out the slot" . PHP_EOL;
        if ($this->count !== 0) {
            $this->count = $this->count - 1;
        }
    }

    public function __toString() : string
    {
        $response =  "Inventory: " . $this->count . " Gumball(s)" . PHP_EOL;

        if ($this->soldState instanceof $this->state) {
            $response .= "A gumball comes rolling out the slot" . PHP_EOL;
        } elseif ($this->noQuarterState instanceof $this->state) {
            $response .= "Machine is waiting for quarter" . PHP_EOL;
        } elseif ($this->soldOutState instanceof $this->state) {
            $response .= "Machine is sold out" . PHP_EOL;
        } elseif ($this->hasQuarterState instanceof $this->state) {
            $response .= "Machine is waiting for turning crank" . PHP_EOL;
        }

        return $response;
    }

    /**
     * @return SoldOutState
     */
    public function getSoldOutState(): SoldOutState
    {
        return $this->soldOutState;
    }

    /**
     * @return SoldState
     */
    public function getSoldState(): SoldState
    {
        return $this->soldState;
    }

    /**
     * @return HasQuarterState
     */
    public function getHasQuarterState(): HasQuarterState
    {
        return $this->hasQuarterState;
    }

    /**
     * @return NoQuarterState
     */
    public function getNoQuarterState(): NoQuarterState
    {
        return $this->noQuarterState;
    }

    /**
     * @param State $state
     */
    public function setState(State $state): void
    {
        $this->state = $state;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    /**
     * @return WinnerState
     */
    public function getWinnerState(): WinnerState
    {
        return $this->winnerState;
    }

    public function refill(int $count)
    {
        $this->count += $count;
        echo "The gumball machine was hust refilled; it's new count is: " . $this->count;
        $this->state->refill();
    }
}