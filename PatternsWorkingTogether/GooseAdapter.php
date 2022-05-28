<?php
declare(strict_types=1);

namespace Patterns;

class GooseAdapter implements Quackable
{
    private Goose $goose;

    public function __construct(Goose $goose)
    {
        $this->goose = $goose;
    }

    public function quack(): void
    {
        $this->goose->honk();
    }
}
