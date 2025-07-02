<?php

namespace MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\BaseDecorator;

use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\DecorateObject\Car;
use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\Interfaces\PaintingInterface;


class PaitingDecorator implements PaintingInterface
{
    /**
     * @var PaintingInterface
     */
    private PaintingInterface $painting;

    public function __construct(PaintingInterface $painting)
    {
        $this->painting = $painting;
    }

    public function paint(Car $car): Car
    {
        return $this->painting->paint($car);
    }
}