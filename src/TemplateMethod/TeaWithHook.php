<?php

namespace TemplateMethod;

class TeaWithHook extends CaffeineBeverageWithHook
{
    public function brew()
    {
        echo "Steeping the tea" . PHP_EOL;
    }

    public function addCondiments()
    {
        echo "Adding Lemon" . PHP_EOL;
    }

    public function customerWantsCondiments()
    {
        return true;
    }
}