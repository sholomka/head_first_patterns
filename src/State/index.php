<?php

require_once '../vendor/autoload.php';

use State\GumballMachine;

//$gumballMachine = new GumballMachine(5);
//
//echo $gumballMachine;
//
//$gumballMachine->insertQuarter();
//$gumballMachine->turnCrank();
//
//echo $gumballMachine;
//
//$gumballMachine->insertQuarter();
//$gumballMachine->ejectQuarter();
//$gumballMachine->turnCrank();
//
//echo $gumballMachine;
//
//$gumballMachine->insertQuarter();
//$gumballMachine->turnCrank();
//$gumballMachine->insertQuarter();
//$gumballMachine->turnCrank();
//$gumballMachine->ejectQuarter();
//
//echo $gumballMachine;
//
//$gumballMachine->insertQuarter();
//$gumballMachine->insertQuarter();
//$gumballMachine->turnCrank();
//$gumballMachine->insertQuarter();
//$gumballMachine->turnCrank();
//$gumballMachine->insertQuarter();
//$gumballMachine->turnCrank();
//
//echo $gumballMachine;

$gumballMachine = new GumballMachine(5);

echo $gumballMachine;

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

echo $gumballMachine;

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

echo $gumballMachine;