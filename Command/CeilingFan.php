<?php

namespace Command;

class CeilingFan
{
    public const HIGH = 3;
    public const MEDIUM = 2;
    public const LOW = 1;
    public const OFF = 0;

    private int $speed;

    public function __construct()
    {
        $this->speed = self::OFF;
    }

    public function high()
    {
        $this->speed = self::HIGH;
        echo "Ceiling Fan is HIGH" . PHP_EOL;
    }

    public function medium()
    {
        $this->speed = self::MEDIUM;
        echo "Ceiling Fan is MEDIUM" . PHP_EOL;
    }

    public function low()
    {
        $this->speed = self::LOW;
        echo "Ceiling Fan is LOW" . PHP_EOL;
    }

    public function off()
    {
        $this->speed = self::OFF;
        echo "Ceiling Fan is OFF" . PHP_EOL;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }
}
