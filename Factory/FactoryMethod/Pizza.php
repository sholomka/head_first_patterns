<?php
declare(strict_types=1);

namespace FactoryMethod;

abstract class Pizza
{
    public function prepare()
    {
        echo "Preparing " . $this->getName() . PHP_EOL;
        echo "Tossing dough... " . PHP_EOL;
        echo "Addidng sauce... " . PHP_EOL;
        echo "Addidng toppings... " . PHP_EOL;
    }

    public function bake()
    {
        echo 'Bake for 25 minutes at 350' . PHP_EOL;
    }

    public function cut()
    {
        echo 'Cutting the pizza into diagonal slices' . PHP_EOL;
    }

    public function box()
    {
        echo 'Place pizza in official PizzaStore box' . PHP_EOL;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
