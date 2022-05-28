<?php

namespace TemplateMethod;

class Tea extends CaffeineBeverage
{
    public function brew()
    {
        echo "Steeping the tea" . PHP_EOL;
    }

    public function addCondiments()
    {
        echo "Adding Lemon" . PHP_EOL;
    }
}