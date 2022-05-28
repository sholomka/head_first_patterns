<?php

namespace Command;

class CeilingFanHighCommand implements Command
{
    private int $prevSpeed;
    private CeilingFan $ceilingFan;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute(): void
    {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->high();
    }

    public function undo(): void
    {
        if ($this->prevSpeed === CeilingFan::HIGH) {
            $this->ceilingFan->high();
        } else if ($this->prevSpeed === CeilingFan::MEDIUM) {
            $this->ceilingFan->medium();
        } else if ($this->prevSpeed === CeilingFan::LOW) {
            $this->ceilingFan->low();
        } else if ($this->prevSpeed === CeilingFan::OFF) {
            $this->ceilingFan->off();
        }
    }
}