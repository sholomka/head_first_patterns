<?php

namespace Iterator;

class Waitress
{
    private \ArrayObject $menus;

    public function __construct(
        \ArrayObject $menus
    ) {
        $this->menus = $menus;
    }

    public function printMenu()
    {
        $menuIterator = $this->menus->getIterator();

        while ($menuIterator->valid()) {
            $menu = $menuIterator->current();
            $this->print($menu->createIterator());

            $menuIterator->next();
        }
    }

    private function print(\Iterator $iterator)
    {
        while ($iterator->valid()) {
            $menuItem = $iterator->current();

            echo($menuItem->getName() . PHP_EOL);
            echo($menuItem->getPrice() . PHP_EOL);
            echo($menuItem->getDescription() . PHP_EOL);

            $iterator->next();
        }
    }
}
