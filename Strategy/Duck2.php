<?php
declare(strict_types=1);

namespace Strategy;

class Duck2 extends Duck
{
    public function __construct()
    {
        $this->flyBeahavior = new FlyWithWings();
        $this->quackBeahavior = new Quack();
    }

    public function display()
    {

    }
}