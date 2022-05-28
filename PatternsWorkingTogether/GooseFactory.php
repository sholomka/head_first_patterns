<?php
declare(strict_types=1);

namespace Patterns;

class GooseFactory extends AbstractGooseFactory
{
    public function createGoose(): Quackable
    {
        return new GooseAdapter(new Goose());
    }
}
