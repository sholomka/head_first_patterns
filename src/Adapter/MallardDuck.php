<?php

namespace Adapter;

class MallardDuck implements Duck
{
    public function quack(): void
    {
        echo "duck quack" . PHP_EOL;
    }

    public function fly(): void
    {
        echo "duck fly" . PHP_EOL;
    }
}
