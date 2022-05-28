<?php
declare(strict_types=1);

namespace Patterns;

class CountingDuckFactory extends AbstractDuckFactory
{
    public function createMallardDuck(): Quackable
    {
        return new QuackCounter(new MallardDuck());
    }

    public function createRedheadDuck(): Quackable
    {
        return new QuackCounter(new RedheadDuck());
    }

    public function createDuckCall(): Quackable
    {
        return new QuackCounter(new DuckCall());
    }

    public function createRubberDuck(): Quackable
    {
        return new QuackCounter(new RubberDuck());
    }

    public function createGooseDuck(): Quackable
    {
        return new GooseAdapter(new Goose());
    }
}
