<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

use MohamedKaram\DesignPatterns\CreationalPatterns\Builder\Models\Car;
use MohamedKaram\DesignPatterns\CreationalPatterns\Builder\BENZCarBuilder;
use MohamedKaram\DesignPatterns\CreationalPatterns\Builder\CarBuilderInterface;

class CarProvider
{
    public function construct(CarBuilderInterface $builder): Car
    {
        $builder->createCar();
        $builder->addBody();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWhool();
        return $builder->getCar();
    }
}

$builder = new BENZCarBuilder();
$director = new CarProvider();
$director->construct($builder);