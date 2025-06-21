<?php

namespace MohamedKaram\DesignPatterns\BehavioralPatterns\Strategy;

use InvalidArgumentException;
use MohamedKaram\DesignPatterns\BehavioralPatterns\Strategy\Interfaces\StrategyInterface;
use MohamedKaram\DesignPatterns\BehavioralPatterns\Strategy\Creators\BankTransferStrategy;
use MohamedKaram\DesignPatterns\BehavioralPatterns\Strategy\Creators\PayPalPaymentStrategy;
use MohamedKaram\DesignPatterns\BehavioralPatterns\Strategy\Interfaces\StrategyFactoryInterface;

class ConcreteStrategyFactory implements StrategyFactoryInterface
{
    public function createStrategy(string $type): StrategyInterface
    {
        return match ($type) {
            'paypal' => new PayPalPaymentStrategy(),
            'bank'   => new BankTransferStrategy(),
            default  => throw new InvalidArgumentException("Unsupported strategy type"),
        };
    }
}
