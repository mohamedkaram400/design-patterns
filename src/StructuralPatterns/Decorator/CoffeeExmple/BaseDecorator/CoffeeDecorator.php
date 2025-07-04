<?php
namespace MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CoffeeExmple\BaseDecorator;

use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CoffeeExmple\Interfaces\Coffee;

abstract class CoffeeDecorator implements Coffee
{
    private Coffee $coffee;
    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost(): float
    {
        return $this->coffee->getCost();
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription();
    }
}