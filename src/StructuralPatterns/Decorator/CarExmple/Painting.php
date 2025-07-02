<?php

namespace MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple;

use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\Interfaces\PaintingInterface;


class Painting implements PaintingInterface
{
    public function paint(Car $car)
    {
        return $car;
    }
}