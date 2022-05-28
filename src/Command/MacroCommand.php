<?php

namespace Command;

class MacroCommand implements Command
{
    /**
     * @var Command[]
     */
    private array $commands;

    /**
     * @param Command[] $commands
     */
    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    public function execute(): void
    {
        for ($i = 0; $i < count($this->commands); $i++) {
            $this->commands[$i]->execute();
        }
    }

    public function undo(): void
    {
        for ($i = 0; $i < count($this->commands); $i++) {
            $this->commands[$i]->undo();
        }
    }
}
