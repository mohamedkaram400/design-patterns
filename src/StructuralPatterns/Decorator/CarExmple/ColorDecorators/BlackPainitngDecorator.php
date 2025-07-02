<?php

namespace MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\ColorDecorators;

use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\Car;
use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\PaitingDecorator;


class BlackPainitngDecorator extends PaitingDecorator
{
    private const COLOR = '-black-';

    public function paint(Car $car)
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }
}