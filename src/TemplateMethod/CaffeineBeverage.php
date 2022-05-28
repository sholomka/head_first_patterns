<?php

namespace TemplateMethod;

abstract class CaffeineBeverage
{
    public final function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    public abstract function brew();

    public abstract function addCondiments();

    public function boilWater()
    {
        echo "Boiling water" . PHP_EOL;
    }

    public function pourInCup()
    {
        echo "Pouring into cup" . PHP_EOL;
    }
}