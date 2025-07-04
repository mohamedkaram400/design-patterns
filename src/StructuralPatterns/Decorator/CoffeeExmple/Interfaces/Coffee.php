<?php
namespace MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CoffeeExmple\Interfaces;

interface Coffee 
{
    public function getCost(): float;
    public function getDescription(): string;
}