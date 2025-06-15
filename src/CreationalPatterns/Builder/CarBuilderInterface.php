<?php
namespace MohamedKaram\DesignPatterns\CreationalPatterns\Builder;

use MohamedKaram\DesignPatterns\CreationalPatterns\Builder\Models\Car;

interface CarBuilderInterface
{
    public function createCar();
    public function addBody();
    public function addDoors();
    public function addEngine();
    public function addWhool();
    public function getCar(): Car;
}