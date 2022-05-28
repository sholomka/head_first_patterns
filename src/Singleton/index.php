<?php

require_once '../../vendor/autoload.php';

use Singleton\SingletonExt;
use Singleton\Singleton;

$singleton = SingletonExt::getInstance();
$singleton2 = Singleton::getInstance();

$b = $singleton2::getInstance();



var_dump($singleton);
var_dump($singleton2);
var_dump($b);