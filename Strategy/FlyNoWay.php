<?php
declare(strict_types=1);

namespace Strategy;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        echo "I can't fly" . PHP_EOL;
    }
}