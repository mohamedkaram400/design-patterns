<?php
namespace MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple\Engines;

use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple\Interfaces\EngineInterface;

class NormalEngine implements EngineInterface
{
    public function startEngine()
    {
        return 'Start normal engine from turbo car';
    }
}