<?php
declare(strict_types=1);

namespace AbstractFactory;

class CheesePizza extends Pizza
{
    private PizzaIngredientFactory $pizzaIngredientFactory;

    public function __construct(
        PizzaIngredientFactory $pizzaIngredientFactory
    ) {
        $this->pizzaIngredientFactory = $pizzaIngredientFactory;
    }

    public function prepare()
    {
        echo "Preparing " . $this->getName() . PHP_EOL;
        $this->dough = $this->pizzaIngredientFactory->createDough();
        $this->sauce = $this->pizzaIngredientFactory->createSauce();
        $this->cheese = $this->pizzaIngredientFactory->createCheese();
    }
}
