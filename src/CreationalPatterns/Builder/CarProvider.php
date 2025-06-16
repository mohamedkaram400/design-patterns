<?php
namespace MohamedKaram\DesignPatterns\CreationalPatterns\Builder;

require_once __DIR__ . '/../../../vendor/autoload.php';


use MohamedKaram\DesignPatterns\CreationalPatterns\Builder\Models\Car;
use MohamedKaram\DesignPatterns\CreationalPatterns\Builder\BMWCarBuilder;
use MohamedKaram\DesignPatterns\CreationalPatterns\Builder\BENZCarBuilder;
use MohamedKaram\DesignPatterns\CreationalPatterns\Builder\CarBuilderInterface;

class CarProvider
{
    public function constructSportsCar(CarBuilderInterface $builder): Car
    {
        $builder->createCar();
        $builder->addBody();
        $builder->addEngine();
        $builder->addWhool();
        return $builder->getCar();
    }

    public function constructLaxureCar(CarBuilderInterface $builder): Car
    {
        $builder->createCar();
        $builder->addBody();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWhool();
        return $builder->getCar();
    }
}

$bmwBuilder = new BMWCarBuilder();
$benzBuilder = new BENZCarBuilder();

$director = new CarProvider();

$bmwCar = $director->constructSportsCar($bmwBuilder);
$benzCar = $director->constructLaxureCar($benzBuilder);

var_dump($bmwCar, $benzCar);