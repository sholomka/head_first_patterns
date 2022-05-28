<?php

namespace Adapter;

class WildTurkey implements Turkey
{
    public function gobble(): void
    {
        echo "turkey gobble" . PHP_EOL;
    }

    public function fly(): void
    {
        echo "turkey fly" . PHP_EOL;
    }
}