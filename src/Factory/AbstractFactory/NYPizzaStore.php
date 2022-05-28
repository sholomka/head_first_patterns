<?php
declare(strict_types=1);

namespace AbstractFactory;

class NYPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $pizza = null;
        $ingredientFactory = new NyPizzaIngredientFactory();

        if ('cheese' === $type) {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName('New York Style Cheese Pizza');
        } elseif ('clam' === $type) {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName('New York Style Clam Pizza');
        }

        return $pizza;
    }
}