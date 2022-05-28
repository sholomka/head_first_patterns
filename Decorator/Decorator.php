<?php
declare(strict_types=1);

namespace Decorator;

class Decorator implements ComponentInterface
{
    protected ComponentInterface $abstractComponent;

    /**
     * @param ComponentInterface $abstractComponent
     */
    public function __construct(ComponentInterface $abstractComponent)
    {
        $this->abstractComponent = $abstractComponent;
    }

    public function getDescription()
    {
        return $this->abstractComponent->getDescription();
    }

    public function cost()
    {
        return $this->abstractComponent->cost();
    }
}