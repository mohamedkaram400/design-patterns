<?php

namespace MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\Interfaces;

use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\DecorateObject\Car;


interface PaintingInterface
{
    public function paint(Car $car): Car;
}