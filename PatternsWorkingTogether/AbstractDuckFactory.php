<?php
declare(strict_types=1);

namespace Patterns;

abstract class AbstractDuckFactory
{
    abstract public function createMallardDuck(): Quackable;
    abstract public function createRedheadDuck(): Quackable;
    abstract public function createDuckCall(): Quackable;
    abstract public function createRubberDuck(): Quackable;
    abstract public function createGooseDuck(): Quackable;
}
