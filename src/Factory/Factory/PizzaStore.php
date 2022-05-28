<?php
declare(strict_types=1);

namespace Factory;

class PizzaStore
{
    private SimplePizzaFactory $simplePizzaFactory;

    public function __construct(
        SimplePizzaFactory $simplePizzaFactory
    ) {
        $this->simplePizzaFactory = $simplePizzaFactory;
    }

    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->simplePizzaFactory->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
