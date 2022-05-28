<?php

namespace TemplateMethod;

abstract class CaffeineBeverageWithHook
{
    public final function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();

        if ($this->customerWantsCondiments()) {
            $this->addCondiments();
        }
    }

    public abstract function brew();

    public abstract function addCondiments();

    protected final function boilWater()
    {
        echo "Boiling water" . PHP_EOL;
    }

    protected final function pourInCup()
    {
        echo "Pouring into cup" . PHP_EOL;
    }

    protected function customerWantsCondiments()
    {
        return true;
    }
}