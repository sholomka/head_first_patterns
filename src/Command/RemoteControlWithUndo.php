<?php

namespace Command;

class RemoteControlWithUndo
{
    /**
     * @var Command[]
     */
    private array $onCommands;

    /**
     * @var Command[]
     */
    private array $ofCommands;

    private Command $undoCommand;

    public function __construct(
    ) {
        $noCommand = new NoCommand();

        for ($i = 0; $i < 7; $i++) {
            $this->onCommands[$i] = $noCommand;
            $this->ofCommands[$i] = $noCommand;
        }

        $this->undoCommand = $noCommand;
    }

    public function setCommand(int $slot, Command $onCommand, Command $ofCommand)
    {
        $this->onCommands[$slot] = $onCommand;
        $this->ofCommands[$slot] = $ofCommand;
    }


    public function onButtonWasPushed($slot)
    {
        $this->onCommands[$slot]->execute();
        $this->undoCommand = $this->onCommands[$slot];
    }

    public function offButtonWasPushed($slot)
    {
        $this->ofCommands[$slot]->execute();
        $this->undoCommand = $this->ofCommands[$slot];
    }

    public function undoButtonWasPushed()
    {
        $this->undoCommand->undo();
    }
}
