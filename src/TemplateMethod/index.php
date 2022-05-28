<?php

require_once '../vendor/autoload.php';

use TemplateMethod\Tea;
use TemplateMethod\TeaWithHook;
use TemplateMethod\Coffee;
use TemplateMethod\CoffeeWithHook;

//$myTea = new Tea();
//$myTea->prepareRecipe();
//$coffee = new Coffee();
//$coffee->prepareRecipe();

$myTea = new TeaWithHook();
$myTea->prepareRecipe();
$coffee = new CoffeeWithHook();
$coffee->prepareRecipe();