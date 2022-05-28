<?php

namespace Command;

class SimpleRemoteControl
{
    private Command $slot;

    public function __construct()
    {
    }

    public function setCommand(Command $command)
    {
        $this->slot = $command;
    }

    public function buttonWasPressed()
    {
        $this->slot->execute();
    }
}
