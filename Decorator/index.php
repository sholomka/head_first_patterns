<?php

require_once '../../vendor/autoload.php';

use Decorator\ConcreteComponent;
use Decorator\ConcreteDecoratorA;
use Decorator\ConcreteDecoratorB;


$component = new ConcreteComponent();

$decorator1 = new ConcreteDecoratorA($component);
$decorator2 = new ConcreteDecoratorB($decorator1);

echo $component->getDescription() . ' ' . $component->cost() . PHP_EOL;
echo $decorator1->getDescription() . ' ' . $decorator1->cost() . PHP_EOL;
echo $decorator2->getDescription() . ' ' . $decorator2->cost() . PHP_EOL;