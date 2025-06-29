<?php
namespace MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple\Interfaces;

use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple\Interfaces\EngineInterface;

class NormalEngine implements EngineInterface
{
    public function startEngine()
    {
        return 'normal engine start';
    }
}