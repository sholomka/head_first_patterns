<?php
declare(strict_types=1);

namespace AbstractFactory;

abstract class Pizza
{
    protected string $name;

    protected Dough $dough;

    protected Sauce $sauce;

    /**
     * @var Veggies[]
     */
    protected array $veggies;

    protected Cheese $cheese;

    protected Pepperoni $pepperoni;

    protected Clams $clam;

    abstract public function prepare();

    public function bake()
    {
        echo 'Bake for 25 minutes at 350' . PHP_EOL;
    }

    public function cut()
    {
        echo 'Cutting the pizza into diagonal slices' . PHP_EOL;
    }

    public function box()
    {
        echo 'Place pizza in official PizzaStore box' . PHP_EOL;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
