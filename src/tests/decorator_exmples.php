<?php
namespace MohamedKaram\DesignPatterns\tests;


use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\Painting;
use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\DecorateObject\Car;
use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CoffeeExmple\ConcreteComponent\SimpleCoffee;
use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CoffeeExmple\ConcreteDecorators\MilkDecorator;
use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\ColorDecorators\RedPainitngDecorator;
use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CoffeeExmple\ConcreteDecorators\SugarDecorator;
use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\ColorDecorators\BluePainitngDecorator;
use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CarExmple\ColorDecorators\BlackPainitngDecorator;
use MohamedKaram\DesignPatterns\StructuralPatterns\Decorator\CoffeeExmple\ConcreteDecorators\WhippedCreamDecorator;

require_once __DIR__ . '/../../vendor/autoload.php';

// $car = new Car(); // DecoratedObject

// $painting = new Painting(); // base component

// // Add decorators one by one
// $redPaint = new RedPainitngDecorator($painting);
// $blueAndRedPaint = new BluePainitngDecorator($redPaint);
// $finalPainting = new BlackPainitngDecorator($blueAndRedPaint);

// $finalPainting->paint($car);

// echo "Car color: " . $car->getColor(); 
// // Outputs something like: -red--blue--black-


$coffee = new SimpleCoffee();
$coffee = new MilkDecorator($coffee);
$coffee = new SugarDecorator($coffee);
$coffee = new WhippedCreamDecorator($coffee);

echo $coffee->getDescription() . PHP_EOL; // Simple coffee, milk, sugar, whipped cream
echo 'Total: $' . $coffee->getCost() . PHP_EOL; // Total: $8.0