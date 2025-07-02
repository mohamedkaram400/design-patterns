<?php

namespace MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\ColorDecorators;

use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\DecorateObject\Car;
use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\BaseDecorator\PaitingDecorator;


class RedPainitngDecorator extends PaitingDecorator
{
    private const COLOR = '-red-';

    public function paint(Car $car): Car
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }
}