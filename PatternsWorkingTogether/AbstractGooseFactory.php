<?php
declare(strict_types=1);

namespace Patterns;

abstract class AbstractGooseFactory
{
    abstract public function createGoose(): Quackable;
}
