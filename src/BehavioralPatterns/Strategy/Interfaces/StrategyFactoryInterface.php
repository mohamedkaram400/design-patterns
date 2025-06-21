<?php

namespace MohamedKaram\DesignPatterns\BehavioralPatterns\Strategy\Interfaces;

interface StrategyFactoryInterface
{
    public function createStrategy(string $type): StrategyInterface;
}