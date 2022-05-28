<?php

namespace Composite;

class Menu extends MenuComponent
{
    private \SplObjectStorage $menuComponents;
    private string $name;
    private string $description;

    public function __construct(
        string $name,
        string $description
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->menuComponents = new \SplObjectStorage();
    }

    public function add(MenuComponent $menuComponent): void
    {
        $this->menuComponents->attach($menuComponent);
    }

    public function remove(MenuComponent $menuComponent): void
    {
        $this->menuComponents->detach($key);
    }

    public function getChild(int $key): MenuComponent
    {
        return $this->menuComponents->offsetGet($key);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function print(): void
    {

        print_r($this->menuComponents);

//        echo $this->getName();
//        echo ", " . $this->getDescription() . PHP_EOL;
//        echo "-----------------------------" . PHP_EOL;
//
//        /** @var MenuComponent $menuComponent */
//        foreach ($this->menuComponents as $menuComponent) {
//            $menuComponent->print();
//        }
    }
}
