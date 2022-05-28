<?php
declare(strict_types=1);

namespace FactoryMethod;

class NYStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->dough = 'Thin Crust Dough';
        $this->name = 'NY Style Sauce And Cheese Pizza';
        $this->sauce = 'Marianara Sauce';
    }
}
