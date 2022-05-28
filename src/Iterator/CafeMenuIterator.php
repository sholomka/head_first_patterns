<?php

namespace Iterator;

class CafeMenuIterator implements \Iterator
{
    /**
     * @var MenuItem[]
     */
    private array $items;

    private int $position = 0;
    /**
     * @var int[]|string[]
     */
    private array $keys;

    /**
     * @param MenuItem[] $items
     */
    public function __construct(array $items)
    {
        $this->keys = array_keys($items);
        $this->items = $items;
    }

    public function next(): void
    {
         ++$this->position;
    }

    public function current()
    {
        return $this->items[$this->keys[$this->position]];
    }

    public function key()
    {
        return $this->keys[$this->position];
    }

    public function valid()
    {
        return isset($this->keys[$this->position]);
    }

    public function rewind()
    {
        $this->position = 0;
    }
}