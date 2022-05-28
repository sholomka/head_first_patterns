<?php

namespace Composite;

class MenuItem extends MenuComponent
{
    private string $name;
    private string $description;
    private bool $vegeterian;
    private float $price;

    public function __construct(
        string $name,
        string $description,
        bool $vegeterian,
        float $price
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->vegeterian = $vegeterian;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return bool
     */
    public function isVegeterian(): bool
    {
        return $this->vegeterian;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    public function print(): void
    {
        echo " " . $this->getName();

        if ($this->isVegeterian()) {
            echo "(v)";
        }

        echo ", " . $this->getPrice() . PHP_EOL;
        echo "  -- " . $this->getDescription() . PHP_EOL;
    }
}