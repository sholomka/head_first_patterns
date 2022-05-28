<?php
declare(strict_types=1);

namespace Patterns;

class RubberDuck implements Quackable
{
    public function quack(): void
    {
        echo "Squeak" . PHP_EOL;
    }
}
