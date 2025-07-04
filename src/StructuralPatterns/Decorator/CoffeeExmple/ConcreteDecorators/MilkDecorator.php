<?php
namespace MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CoffeeExmple\ConcreteDecorators;

use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CoffeeExmple\BaseDecorator\CoffeeDecorator;

class MilkDecorator extends CoffeeDecorator
{
    public function getCost(): float
    {
        return parent::getCost() + 1.0;
    }
    public function getDescription(): string
    {
        return parent::getDescription() . ', milk';
    }
}