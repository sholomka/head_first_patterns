<?php

require_once '../vendor/autoload.php';

use Facade\HomeTheaterFacade;

//$component1 = new Component1();
//$component2 = new Component2();
//$component3 = new Component3();

$homeTheaterFacade = new HomeTheaterFacade(
//    $component1,
//    $component2,
//    $component3
);

$homeTheaterFacade->watchMovie('Raiders of het Lost Ark');
$homeTheaterFacade->endMovie();
