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

        $simulator->simulate($countingDuckFactory);
    }

    private function simulate(AbstractDuckFactory $duckFactory): void
    {
        $redheadDuck =  $duckFactory->createRedheadDuck();
        $duckCall =  $duckFactory->createDuckCall();
        $rubberDuck =  $duckFactory->createRubberDuck();
        $gooseDuck = $duckFactory->createGooseDuck();

        echo 'Duck Simulator: With Observer' . PHP_EOL;

        $flockOfDucks = new Flock();

        $flockOfDucks->add($redheadDuck);
        $flockOfDucks->add($duckCall);
        $flockOfDucks->add($rubberDuck);
        $flockOfDucks->add($gooseDuck);

        $flockOfMallards = new Flock();
//
        $mallardDuckOne = $duckFactory->createMallardDuck();
        $mallardDuckTwo = $duckFactory->createMallardDuck();
        $mallardDuckThree = $duckFactory->createMallardDuck();
        $mallardDuckFour = $duckFactory->createMallardDuck();

        $flockOfMallards->add($mallardDuckOne);
        $flockOfMallards->add($mallardDuckTwo);
        $flockOfMallards->add($mallardDuckThree);
        $flockOfMallards->add($mallardDuckFour);
//
        $flockOfDucks->add($flockOfMallards);

        $quackologist = new Quackologist();
        $flockOfDucks->registerObserver($quackologist);

        $this->duckSimulate($flockOfDucks);

//        echo 'Duck Simulator Mallard Flock Simulation' . PHP_EOL;
//        $this->duckSimulate($flockOfMallards);

        echo 'The ducks quacked ' . QuackCounter::getQuacks() . ' times' . PHP_EOL;
    }

    private function duckSimulate(Quackable $duck): void
    {
        $duck->quack();
    }
}