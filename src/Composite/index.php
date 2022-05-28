<?php

require_once '../vendor/autoload.php';

use Composite\Menu;
use Composite\MenuItem;
use Composite\Waitress;


$pancakeHouseMenu = new Menu('Pancake House Menu', 'Breakfast');
$dinnerMenu = new Menu('Dinner Menu', 'Lunch');
$cafeMenu = new Menu('Cafe Menu', 'Dinner');
$dessertMenu = new Menu('Dessert Menu', 'Dessert of course');

$allMenus = new Menu('All Menu', 'All menus combined');

$allMenus->add($pancakeHouseMenu);
$allMenus->add($dinnerMenu);
$allMenus->add($cafeMenu);

$dinnerMenu->add(
    new MenuItem('Pasta', 'Spaghetti with MArinara Sauce', true, 3.89)
);

$dinnerMenu->add($dessertMenu);

$dessertMenu->add(
    new MenuItem('Apple Pie', 'Apple pie with a flakey crust', true, 1.59)
);

$waitRess = new Waitress($allMenus);

$waitRess->printMenu();