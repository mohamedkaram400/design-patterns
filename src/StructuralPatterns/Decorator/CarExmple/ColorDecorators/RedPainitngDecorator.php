<?php

namespace MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\ColorDecorators;

use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\Car;
use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\PaitingDecorator;


class RedPainitngDecorator extends PaitingDecorator
{
    private const COLOR = '-red-';

    public function paint(Car $car)
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }
}