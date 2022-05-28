<?php

require_once '../vendor/autoload.php';

use Iterator\CafeMenu;
use Iterator\DinnerMenu;
use Iterator\PancakeHouseMenu;
use Iterator\Waitress;

//$pankakeHouseMenu = new PancakeHouseMenu();
//$breakfastItems = $pankakeHouseMenu->getMenuItems();
//
//$dinnerMenu = new DinnerMenu();
//$dinnerMenuIterator = $dinnerMenu->createIterator();

//for ($i = 0; $i < $breakfastItems->count(); $i++) {
//    /** @var \Iterator\MenuItem $menuItem */
//    $menuItem = $breakfastItems->offsetGet($i);
//    print_r($menuItem->getName() . PHP_EOL);
//    print_r($menuItem->getPrice() . PHP_EOL);
//    print_r($menuItem->getDescription() . PHP_EOL);
//}


//
//for ($i = 0; $i < count($lunchItems); $i++) {
//    /** @var \Iterator\MenuItem $menuItem */
//    $menuItem = $lunchItems[$i];
//    print_r($menuItem->getName() . PHP_EOL);
//    print_r($menuItem->getPrice() . PHP_EOL);
//    print_r($menuItem->getDescription() . PHP_EOL);
//}


$menus = new ArrayObject([new PancakeHouseMenu(), new DinnerMenu(), new CafeMenu()]);

$waitress = new Waitress($menus);

$waitress->printMenu();