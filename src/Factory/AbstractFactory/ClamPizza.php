<?php
declare(strict_types=1);

namespace AbstractFactory;

class ClamPizza extends Pizza
{
    private PizzaIngredientFactory $pizzaIngredientFactory;

    /**
     * @param PizzaIngredientFactory $ingredientFactory
     */
    public function __construct(PizzaIngredientFactory $pizzaIngredientFactory)
    {
        $this->pizzaIngredientFactory = $pizzaIngredientFactory;
    }

    public function prepare()
    {
        echo "Preparing " . $this->getName() . PHP_EOL;
        $this->dough = $this->pizzaIngredientFactory->createDough();
        $this->sauce = $this->pizzaIngredientFactory->createSauce();
        $this->cheese = $this->pizzaIngredientFactory->createCheese();
        $this->clam = $this->pizzaIngredientFactory->createClam();
    }
}