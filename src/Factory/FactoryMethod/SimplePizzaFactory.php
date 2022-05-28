<?php
declare(strict_types=1);

namespace FactoryMethod;

use FactoryMethod\NYStyleCheesePizza;
use FactoryMethod\ChicagoStyleCheesePizza;
use FactoryMethod\Pizza;

class SimplePizzaFactory
{
    public function createPizza(string $type): Pizza
    {
        $pizza = null;

        if ('cheese' === $type) {
            $pizza = new NYStyleCheesePizza();
        } elseif ('clam' === $type) {
            $pizza = new ChicagoStyleCheesePizza();
        }

        return $pizza;
    }
}
