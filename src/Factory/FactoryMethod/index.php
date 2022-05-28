<?php

require_once '../../../vendor/autoload.php';

use FactoryMethod\NYPizzaStore;
use FactoryMethod\ChickagoPizzaStore;

$nyPizzaStore = new NYPizzaStore();
$chickagoPizzaStore = new ChickagoPizzaStore();

$pizza = $nyPizzaStore->orderPizza('cheese');
echo "Tom Ordered a " . $pizza->getName() . PHP_EOL;

$pizza = $chickagoPizzaStore->orderPizza('cheese');
echo "Jonny Ordered a " . $pizza->getName() . PHP_EOL;

