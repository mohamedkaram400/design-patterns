<?php
namespace MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple;

use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple\Adaptee\TurboEngine;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple\Interfaces\EngineInterface;

class TurboEngineAdapter implements EngineInterface
{
    private TurboEngine $engine;

    public function __construct(TurboEngine $engine)
    {
        $this->engine = $engine;
    }

    public function startEngine()
    {
        return $this->engine->startTurboEngine();
    }
}