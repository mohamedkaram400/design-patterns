<?php
namespace MohamedKaram\DesignPatterns\BehavioralPatterns\Strategy\Creators;

use MohamedKaram\DesignPatterns\BehavioralPatterns\Strategy\Interfaces\StrategyInterface;

class PayPalPaymentStrategy implements StrategyInterface
{
    public function execute($type)
    {
        return 'PayPalPaymentStrategy' . PHP_EOL;
    }
}