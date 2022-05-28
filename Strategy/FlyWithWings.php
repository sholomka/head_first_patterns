<?php
declare(strict_types=1);

namespace Strategy;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        echo "I'm flying!!!" . PHP_EOL;
    }
}