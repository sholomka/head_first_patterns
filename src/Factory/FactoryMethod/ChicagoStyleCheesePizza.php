<?php
declare(strict_types=1);

namespace FactoryMethod;

class ChicagoStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->dough = 'Extra Thick Crust Dough';
        $this->name = 'Chicago Style Deep Dish Cheese Pizza';
        $this->sauce = 'Plum Tomato Sauce';
    }

    public function cut()
    {
        echo 'Cutting the pizza into square slices' . PHP_EOL;
    }
}