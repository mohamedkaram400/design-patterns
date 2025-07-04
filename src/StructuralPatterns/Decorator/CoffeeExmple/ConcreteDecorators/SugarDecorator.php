<?php
namespace MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CoffeeExmple\ConcreteDecorators;

use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CoffeeExmple\BaseDecorator\CoffeeDecorator;

class SugarDecorator extends CoffeeDecorator
{
    public function getCost(): float
    {
        return parent::getCost() + 3.0;
    }

    public function getDescription(): string
    {
        return parent::getDescription() . ', Sugar';
    }
}