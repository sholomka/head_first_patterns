<?php
declare(strict_types=1);

namespace FactoryMethod;

class NYPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $pizza = null;

        if ('cheese' === $type) {
            $pizza = new NYStyleCheesePizza();
        }

        return $pizza;
    }
}