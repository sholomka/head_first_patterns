<?php

require_once '../../../vendor/autoload.php';

use Factory\PizzaStore;
use Factory\SimplePizzaFactory;

$nyPizzaStore = new PizzaStore(new SimplePizzaFactory());
$nyPizzaStore->orderPizza('cheese');
$nyPizzaStore->orderPizza('clam');
