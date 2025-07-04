<?php
namespace MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CoffeeExmple\ConcreteDecorators;

use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CoffeeExmple\BaseDecorator\CoffeeDecorator;

class WhippedCreamDecorator extends CoffeeDecorator
{
    public function getCost(): float
    {
        return parent::getCost() + 5.00;
    }

    public function getDescription(): string
    {
        return parent::getDescription() . ', WhippedCream';
    }
}