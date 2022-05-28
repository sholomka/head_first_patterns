<?php
declare(strict_types=1);

namespace Strategy;

abstract class Duck
{
    protected FlyBehavior $flyBeahavior;

    protected QuackBehavior $quackBeahavior;

    abstract public function display();

    public function performFly()
    {
        $this->flyBeahavior->fly();
    }

    public function performQuack()
    {
        $this->quackBeahavior->quack();
    }

    /**
     * @param FlyBehavior $flyBeahavior
     */
    public function setFlyBeahavior(FlyBehavior $flyBeahavior): void
    {
        $this->flyBeahavior = $flyBeahavior;
    }

    /**
     * @param QuackBehavior $quackBeahavior
     */
    public function setQuackBeahavior(QuackBehavior $quackBeahavior): void
    {
        $this->quackBeahavior = $quackBeahavior;
    }
}