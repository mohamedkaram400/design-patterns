<?php
namespace MohamedKaram\DesignPatterns\CreationalPatterns\Builder;

use MohamedKaram\DesignPatterns\CreationalPatterns\Builder\Models\Car;
use MohamedKaram\DesignPatterns\CreationalPatterns\Builder\Models\BMWCar;
use MohamedKaram\DesignPatterns\CreationalPatterns\Builder\CarBuilderInterface;

class BMWCarBuilder implements CarBuilderInterface
{
    /**
     * @var Car $type
     */
    private $type;
    public function createCar(): void
    {
        $this->type = new BMWCar();
    }
    public function addBody(): void
    {
        $this->type->setParts('BODY', 'body');
    }
    public function addDoors(): void
    {
        $this->type->setParts('DOOR', 'door');
    }
    public function addEngine(): void
    {
        $this->type->setParts('ENGINE', 'engine');
    }
    public function addWhool(): void
    {
        $this->type->setParts('WHOOL', 'whool');
    }
    public function getCar(): Car
    {
        return $this->type;
    }
}