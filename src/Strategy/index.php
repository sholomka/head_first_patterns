<?php

require_once 'vendor/autoload.php';

use Strategy\Duck1;
use Strategy\Duck2;
use Strategy\FlyNoWay;

$duck1 = new Duck1();

$duck1->performFly();
$duck1->performQuack();

$duck2 = new Duck2();

$duck2->performFly();
$duck2->setFlyBeahavior(new FlyNoWay());
$duck2->performFly();