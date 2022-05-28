<?php
declare(strict_types=1);

namespace Decorator;

class ConcreteDecoratorA extends Decorator
{
    public function getDescription()
    {
       return parent::getDescription() . ' decoratorA';
    }

    public function cost()
    {
        return parent::cost() + 0.2;
    }
}
