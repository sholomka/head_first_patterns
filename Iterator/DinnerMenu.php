<?php

namespace Iterator;

use Iterator;

class DinnerMenu implements Menu
{
    private int $numberOfItems = 0;
    private array $menuItems;

    public function __construct()
    {
        $this->menuItems = [];

        $this->addItem('Name', 'Description', true, 1.1);
        $this->addItem('Name2', 'Description2', true, 1.1);
        $this->addItem('Name3', 'Description3', true, 1.1);
        $this->addItem('Name4', 'Description4', true, 1.1);
    }

    private function addItem(string $name, string $description, bool $vegeterian, float $price)
    {
        $menuItem = new MenuItem($name, $description, $vegeterian, $price);

        $this->menuItems[$this->numberOfItems] = $menuItem;
        $this->numberOfItems = $this->numberOfItems + 1;
    }

    public function createIterator(): Iterator
    {
        return new DinnerMenuIterator($this->menuItems);
    }
}
