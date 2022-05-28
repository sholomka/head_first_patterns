<?php

require_once '../vendor/autoload.php';

use Adapter\TurkeyAdapter;
use Adapter\Turkey;
use Adapter\Duck;
use Adapter\MallardDuck;
use Adapter\WildTurkey;


$mallardDuck = new MallardDuck();
$wildTurkey = new WildTurkey();
$turkeyAdapter = new TurkeyAdapter($wildTurkey);

$wildTurkey->fly();
$wildTurkey->gobble();

duck($mallardDuck);
duck($turkeyAdapter);

function duck(Duck $duck) {
    $duck->fly();
    $duck->quack();
}