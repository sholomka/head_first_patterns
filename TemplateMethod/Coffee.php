<?php

namespace TemplateMethod;

class Coffee extends CaffeineBeverage
{
    public function brew()
    {
        echo "Dripping Coffee through filter" . PHP_EOL;
    }

    public function addCondiments()
    {
        echo "Adding Sugar and Milk" . PHP_EOL;
    }
}