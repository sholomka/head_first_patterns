<?php
declare(strict_types=1);

namespace Decorator;

class ConcreteComponent implements ComponentInterface
{
    public function getDescription(): string
    {
       return 'ConcreteComponent';
    }

    public function cost()
    {
        return 0.91;
    }
}
