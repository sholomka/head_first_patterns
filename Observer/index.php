<?php

require_once '../../vendor/autoload.php';

use Observer\WeatherData;
use Observer\CurrentConditionsDisplay;

$subject = new WeatherData();
$observer = new CurrentConditionsDisplay($subject);

$subject->setMeasurements(87.2, 99.1, 66.5);
