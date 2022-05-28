<?php
declare(strict_types=1);

namespace FactoryMethod;

class ChickagoPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $pizza = null;

        if ('cheese' === $type) {
            $pizza = new ChicagoStyleCheesePizza();
        }

        return $pizza;
    }
}