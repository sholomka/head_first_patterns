<?php
declare(strict_types=1);

namespace Patterns;

interface Observer
{
    public function update(QuackObservable $duck): void;
}
