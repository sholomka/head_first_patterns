<?php

require_once '../../../vendor/autoload.php';

use AbstractFactory\NYPizzaStore;

$nyPizzaStore = new NYPizzaStore();
$nyPizzaStore->orderPizza('cheese');
$nyPizzaStore->orderPizza('clam');
