<?php
declare(strict_types=1);

namespace Decorator;

class ConcreteDecoratorB extends Decorator
{
    public function getDescription()
    {
        return $this->abstractComponent->getDescription() . ' decoratorB';
    }

    public function cost()
    {
        return $this->abstractComponent->cost() + 0.5;
    }
}