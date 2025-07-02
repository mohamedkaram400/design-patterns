<?php

use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\ColorDecorators\BlackPainitngDecorator;
use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\Painting;
use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\DecorateObject\Car;
use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\ColorDecorators\RedPainitngDecorator;
use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\ColorDecorators\BluePainitngDecorator;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testCanPaintCarWithRedAndBlue()
    {
        $car = new Car();
        $painting = new Painting();

        $redPainting = new RedPainitngDecorator($painting);
        $finalPainting = new BluePainitngDecorator($redPainting);
        
        $finalPainting->paint($car);

        $this->assertEquals('-blue--red-', $car->getColor());
    }

    public function testCanPaintCarWithRedAndBlack()
    {
        $car = new Car();
        $painting = new Painting();

        $redPainting = new RedPainitngDecorator($painting);
        $finalPainting = new BlackPainitngDecorator($redPainting);
        
        $finalPainting->paint($car);

        $this->assertEquals('-black--red-', $car->getColor());
    }
}