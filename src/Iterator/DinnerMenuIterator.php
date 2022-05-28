<?php

namespace Iterator;

class DinnerMenuIterator implements \Iterator
{
    /**
     * @var MenuItem[]
     */
    private array $items;

    private int $position = 0;

    /**
     * @param MenuItem[] $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function next(): void
    {
        ++$this->position;
    }

    public function current()
    {
       return $this->items[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function valid()
    {
        return isset($this->items[$this->position]);
    }

    public function rewind()
    {
        $this->position = 0;
    }
}