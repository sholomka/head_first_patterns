<?php
declare(strict_types=1);

namespace Factory;

use Factory\CheesePizza;
use Factory\ClamPizza;
use Factory\Pizza;

class SimplePizzaFactory
{
    public function createPizza(string $type): Pizza
    {
        $pizza = null;

        if ('cheese' === $type) {
            $pizza = new CheesePizza();
        } elseif ('clam' === $type) {
            $pizza = new ClamPizza();
        }

        return $pizza;
    }
}
