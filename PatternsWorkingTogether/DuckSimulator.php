<?php
declare(strict_types=1);

namespace Patterns;

class DuckSimulator
{
    public static function start(): void
    {
        $simulator = new self();
        $simulator->simulate();
    }

    private function simulate(): void
    {
        $mallardDuck = new QuackCounter(new MallardDuck());
        $redheadDuck =  new QuackCounter(new RedheadDuck());
        $duckCall =  new QuackCounter(new DuckCall());
        $rubberDuck =  new QuackCounter(new RubberDuck());
        $gooseDuck = new GooseAdapter(new Goose());

        echo 'Duck Simulator' . PHP_EOL;

        $this->duckSimulate($mallardDuck);
        $this->duckSimulate($redheadDuck);
        $this->duckSimulate($duckCall);
        $this->duckSimulate($rubberDuck);
        $this->duckSimulate($gooseDuck);

        echo 'The ducks quacked ' . QuackCounter::getQuacks() . ' times' . PHP_EOL;

    }

    private function duckSimulate(Quackable $duck): void
    {
        $duck->quack();
    }
}