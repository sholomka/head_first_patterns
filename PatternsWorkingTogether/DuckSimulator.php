<?php
declare(strict_types=1);

namespace Patterns;

class DuckSimulator
{
    public static function start(): void
    {
        $simulator = new self();

        $countingDuckFactory = new CountingDuckFactory();
        $duckFactory = new DuckFactory();

        $simulator->simulate($countingDuckFactory, $duckFactory);
    }

    private function simulate(AbstractDuckFactory $countingDuckFactory, AbstractDuckFactory $duckFactory): void
    {
        $mallardDuck = $countingDuckFactory->createMallardDuck();
        $redheadDuck =  $countingDuckFactory->createRedheadDuck();
        $duckCall =  $countingDuckFactory->createDuckCall();
        $rubberDuck =  $countingDuckFactory->createRubberDuck();
        $gooseDuck = $duckFactory->createGooseDuck();

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