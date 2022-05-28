<?php

namespace TemplateMethod;

class CoffeeWithHook extends CaffeineBeverageWithHook
{
    public function brew()
    {
        echo "Dripping Coffee through filter" . PHP_EOL;
    }

    public function addCondiments()
    {
        echo "Adding Sugar and Milk" . PHP_EOL;
    }

    public function customerWantsCondiments()
    {
        return false;
    }
}