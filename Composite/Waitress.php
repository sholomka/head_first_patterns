<?php

namespace Composite;

class Waitress
{
    private MenuComponent $allMenus;

    /**
     * @param MenuComponent $allMenus
     */
    public function __construct(MenuComponent $allMenus)
    {
        $this->allMenus = $allMenus;
    }

    public function printMenu()
    {
        $this->allMenus->print();
    }
}
