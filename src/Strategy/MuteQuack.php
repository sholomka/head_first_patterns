<?php
declare(strict_types=1);

namespace Strategy;

class MuteQuack implements QuackBehavior
{

    public function quack()
    {
        echo "silence" . PHP_EOL;
    }
}