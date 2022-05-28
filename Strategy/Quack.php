<?php
declare(strict_types=1);

namespace Strategy;

class Quack implements QuackBehavior
{

    public function quack()
    {
        echo "Quack" . PHP_EOL;
    }
}