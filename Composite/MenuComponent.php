<?php

namespace Composite;

abstract class MenuComponent
{
    public function add(MenuComponent $menuComponent): void
    {
        throw new \Exception('Unsupportedd operation');
    }

    public function remove(MenuComponent $menuComponent): void
    {
        throw new \Exception('Unsupportedd operation');
    }

    public function getChild(int $key): MenuComponent
    {
        throw new \Exception('Unsupportedd operation');
    }

    public function getName(): string
    {
        throw new \Exception('Unsupportedd operation');
    }

    public function getDescription(): string
    {
        throw new \Exception('Unsupportedd operation');
    }

    public function getPrice(): float
    {
        throw new \Exception('Unsupportedd operation');
    }

    public function isVegetarian(): bool
    {
        throw new \Exception('Unsupportedd operation');
    }

    public function print(): void
    {
        throw new \Exception('Unsupportedd operation');
    }
}
