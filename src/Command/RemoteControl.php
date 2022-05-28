<?php

namespace Command;

class RemoteControl
{
    /**
     * @var Command[]
     */
    private array $onCommands;

    /**
     * @var Command[]
     */
    private array $ofCommands;

    public function __construct(
    ) {
        $noCommand = new NoCommand();

        for ($i = 0; $i < 7; $i++) {
            $this->onCommands[$i] = $noCommand;
            $this->ofCommands[$i] = $noCommand;
        }
    }

    public function setCommand(int $slot, Command $onCommand, Command $ofCommand)
    {
        $this->onCommands[$slot] = $onCommand;
        $this->ofCommands[$slot] = $ofCommand;
    }


    public function onButtonWasPushed($slot)
    {
        $this->onCommands[$slot]->execute();
    }

    public function offButtonWasPushed($slot)
    {
        $this->ofCommands[$slot]->execute();
    }
}