<?php
declare(strict_types=1);

namespace Singleton;

class Singleton
{
    private static $instance;

    public $a = 1;

    private function __construct()
    {
    }

    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }
}
