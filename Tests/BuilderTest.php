<?php

use PHPUnit\Framework\TestCase;
use MohamedKaram\DesignPatterns\CreationalPatterns\Builder\CarProvider;
use MohamedKaram\DesignPatterns\CreationalPatterns\Builder\BMWCarBuilder;
use MohamedKaram\DesignPatterns\CreationalPatterns\Builder\Models\BMWCar;
use MohamedKaram\DesignPatterns\CreationalPatterns\Builder\BENZCarBuilder;
use MohamedKaram\DesignPatterns\CreationalPatterns\Builder\Models\BENZCar;

class BuilderTest extends TestCase
{
    public function testCanProvideBMWCar()
    {
        $BMWCar = new BMWCarBuilder();
        $provideCar = new CarProvider();
        $myCar = $provideCar->constructLaxureCar($BMWCar);
        $this->assertInstanceOf(BMWCar::class, $myCar);
    }

    public function testCanProvideBENZCar()
    {
        $BENZCar = new BENZCarBuilder();
        $provideCar = new CarProvider();
        $myCar = $provideCar->constructSportsCar($BENZCar);
        $this->assertInstanceOf(BENZCar::class, $myCar);
    }
}