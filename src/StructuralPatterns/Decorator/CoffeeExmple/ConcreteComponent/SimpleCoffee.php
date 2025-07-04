<?php
namespace MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CoffeeExmple\ConcreteComponent;

use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CoffeeExmple\Interfaces\Coffee;

class SimpleCoffee implements Coffee
{
    public function getCost(): float
    {
        return 5.00;
    }
    public function getDescription(): string
    {
        return 'Simple coffee';
    }
}