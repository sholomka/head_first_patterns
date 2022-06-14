<?php
declare(strict_types=1);

namespace Patterns;

interface QuackObservable
{
    public function registerObserver(Observer $observer): void;
    public function notifyObservers(): void;
}