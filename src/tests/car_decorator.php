<?php
namespace MohamedKaram\DesignPatterns\tests;


use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\DecorateObject\Car;
use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\Painting;
use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\ColorDecorators\RedPainitngDecorator;
use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\ColorDecorators\BluePainitngDecorator;
use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\ColorDecorators\BlackPainitngDecorator;

require_once __DIR__ . '/../../vendor/autoload.php';

$car = new Car(); // DecoratedObject

$painting = new Painting(); // base component

// Add decorators one by one
$redPaint = new RedPainitngDecorator($painting);
$blueAndRedPaint = new BluePainitngDecorator($redPaint);
$finalPainting = new BlackPainitngDecorator($blueAndRedPaint);

$finalPainting->paint($car);

echo "Car color: " . $car->getColor(); 
// Outputs something like: -red--blue--black-
