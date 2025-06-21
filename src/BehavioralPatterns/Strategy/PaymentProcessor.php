<?php
namespace MohamedKaram\DesignPatterns\BehavioralPatterns\Strategy;

use MohamedKaram\DesignPatterns\BehavioralPatterns\Strategy\Interfaces\StrategyInterface;

class PaymentProcessor
{    
    public StrategyInterface $paymentStrategy;

    public function setStrategy(StrategyInterface $paymentStrategy)
    {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function process($paymentData)
    {
        return $this->paymentStrategy->execute($paymentData);
    }
}