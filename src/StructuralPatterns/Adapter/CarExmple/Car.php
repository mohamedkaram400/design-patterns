<?php
namespace MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple;

use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple\Interfaces\EngineInterface;

class Car
{
    private EngineInterface $engine;

    public function __construct(EngineInterface $engine)
    {
        $this->engine = $engine;
    }

    public function startEngine()
    {
        return $this->engine->startEngine();
    }
}

