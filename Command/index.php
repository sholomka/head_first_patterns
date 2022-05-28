<?php

require_once '../vendor/autoload.php';

use Command\SimpleRemoteControl;
use Command\RemoteControl;
use Command\RemoteControlWithUndo;
use Command\Light;
use Command\CeilingFan;
use Command\LightOnCommand;
use Command\LightOffCommand;
use Command\GarageDoorOpenCommand;
use Command\CeilingFanHighCommand;
use Command\CeilingFanMediumCommand;
use Command\CeilingFanOffCommand;
use Command\GarageDoor;
use Command\MacroCommand;

//$remote = new SimpleRemoteControl();
//
//$light = new Light();
//$garage = new GarageDoor();
//$lightOn = new LightOnCommand($light);
//$garageOpen = new GarageDoorOpenCommand($garage);
//
//$remote->setCommand($lightOn);
//$remote->buttonWasPressed();
//
//$remote->setCommand($garageOpen);
//$remote->buttonWasPressed();

//$remote = new RemoteControl();
//$light = new Light();
//$lightOn = new LightOnCommand($light);
//$lightOff = new LightOffCommand($light);
//
//$remote->setCommand(0, $lightOn, $lightOff);
//$remote->onButtonWasPushed(0);
//$remote->offButtonWasPushed(0);

//$remote = new RemoteControlWithUndo();
//$light = new Light();
//$lightOn = new LightOnCommand($light);
//$lightOff = new LightOffCommand($light);
//
//$remote->setCommand(0, $lightOn, $lightOff);
//$remote->onButtonWasPushed(0);
//$remote->offButtonWasPushed(0);
//$remote->undoButtonWasPushed();
//
//$remote->offButtonWasPushed(0);
//$remote->onButtonWasPushed(0);
//$remote->undoButtonWasPushed();


//$remote = new RemoteControlWithUndo();
//$ceilingFan = new CeilingFan();
//
//$ceilingFanHigh = new CeilingFanHighCommand($ceilingFan);
//$ceilingFanMedium = new CeilingFanMediumCommand($ceilingFan);
//$ceilingFanOff = new CeilingFanOffCommand($ceilingFan);
//
//
//$remote->setCommand(0, $ceilingFanMedium, $ceilingFanOff);
//$remote->setCommand(1, $ceilingFanHigh, $ceilingFanOff);
//
//
//$remote->onButtonWasPushed(0);
//$remote->offButtonWasPushed(0);
//$remote->undoButtonWasPushed();
//
//$remote->onButtonWasPushed(1);
//$remote->undoButtonWasPushed();


$remote = new RemoteControlWithUndo();
$ceilingFan = new CeilingFan();
$light = new Light();



$lightOn = new LightOnCommand($light);
$ceilingFanHigh = new CeilingFanHighCommand($ceilingFan);

$ceilingFanOff = new CeilingFanOffCommand($ceilingFan);
$lightOff = new LightOffCommand($light);

$partyOn = [$lightOn, $ceilingFanHigh];
$partyOff = [$lightOff, $ceilingFanOff];

$partyOnMacro = new MacroCommand($partyOn);
$partyOfMacro = new MacroCommand($partyOff);

$remote->setCommand(0, $partyOnMacro, $partyOfMacro);
$remote->onButtonWasPushed(0);
$remote->offButtonWasPushed(0);

