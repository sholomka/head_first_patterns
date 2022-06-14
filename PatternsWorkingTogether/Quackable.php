<?php
declare(strict_types=1);

namespace Patterns;

interface Quackable extends QuackObservable
{
    public function quack(): void;
}
