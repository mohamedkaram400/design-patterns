<?php

namespace MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple;

use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\Car;
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

    public function paint(Car $car)
    {
        return $this->painting->paint($car);
    }
}