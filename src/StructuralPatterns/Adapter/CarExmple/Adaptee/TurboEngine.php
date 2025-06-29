<?php
namespace MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple\Adaptee;

use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple\Interfaces\TurboEngineInterface;

class TurboEngine implements TurboEngineInterface
{
    public function startTurboEngine()
    {
        return 'Start engine from turbo car';
    }
}