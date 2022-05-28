<?php
declare(strict_types=1);

namespace Strategy;

class Duck1 extends Duck
{
    public function __construct()
    {
        $this->flyBeahavior = new FlyNoWay();
        $this->quackBeahavior = new MuteQuack();
    }

    public function display()
    {
        // TODO: Implement display() method.
    }
}