<?php

namespace MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple;

use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\Interfaces\PaintingInterface;
use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\DecorateObject\Car;


class Painting implements PaintingInterface
{
    public function paint(Car $car): Car
    {
        return $car;
    }
}