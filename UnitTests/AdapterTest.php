<?php

use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple\Adaptee\TurboEngine;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple\Car;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple\Engines\NormalEngine;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple\TurboEngineAdapter;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testCanStartNormalEngine()
    {
        $engine = new NormalEngine();
        $car = new Car($engine);
        $this->assertEquals('Start normal engine from turbo car', $car->startEngine());
    }

    public function testCanStartTurboEngine()
    {
        $engine = new TurboEngine();
        $adapter = new TurboEngineAdapter($engine);
        $car = new Car($adapter);
        $this->assertEquals('Start engine from turbo car', $car->startEngine());
    }
}