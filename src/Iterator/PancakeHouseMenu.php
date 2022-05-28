<?php

namespace Iterator;

use ArrayObject;
use Iterator;

class PancakeHouseMenu implements Menu
{
    private ArrayObject $menuItems;

    public function __construct()
    {
        $this->menuItems = new ArrayObject();

        $this->addItem('Name', 'Description', true, 1.1);
        $this->addItem('Name2', 'Description2', true, 1.1);
        $this->addItem('Name3', 'Description3', true, 1.1);
        $this->addItem('Name4', 'Description4', true, 1.1);
    }

    private function addItem(string $name, string $description, bool $vegeterian, float $price): void
    {
        $menuItem = new MenuItem($name, $description, $vegeterian, $price);

        $this->menuItems->append($menuItem);
    }

    public function createIterator(): Iterator
    {
        return $this->menuItems->getIterator();
    }
}
