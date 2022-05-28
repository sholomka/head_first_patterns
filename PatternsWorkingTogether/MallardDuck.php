<?php
declare(strict_types=1);

namespace Patterns;

class MallardDuck implements Quackable
{
    public function quack(): void
    {
        echo "Quack" . PHP_EOL;
    }
}