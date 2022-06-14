<?php
declare(strict_types=1);

namespace Patterns;

class Quackologist implements Observer
{
    public function update(QuackObservable $duck): void
    {
        echo "Quackologist: " . get_class($duck) . " just quacked." . PHP_EOL;
    }
}
