<?php
declare(strict_types=1);

namespace Patterns;

class DuckCall implements Quackable
{
    public function quack(): void
    {
        echo "Kwak" . PHP_EOL;
    }
}