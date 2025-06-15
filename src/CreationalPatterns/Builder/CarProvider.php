<?php

use MohamedKaram\DesignPatterns\CreationalPatterns\Builder\Models\Car;
use MohamedKaram\DesignPatterns\CreationalPatterns\Builder\CarBuilderInterface;

class CarProvider
{
    /**
     * @var CarBuilderInterface $builder
     */
    private $builder;
    public function __construct(CarBuilderInterface $builder)
    {
        $this->builder = $builder;
    }
    public function provideCar(): Car
    {
        $this->builder->createCar();
        $this->builder->addBody();
        $this->builder->addDoors();
        $this->builder->addEngine();
        $this->builder->addWhool();
        return $this->builder->getCar();
    }
}