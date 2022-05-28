<?php

namespace Iterator;

class MenuItem
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

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function isVegeterian(): bool
    {
        return $this->vegeterian;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
