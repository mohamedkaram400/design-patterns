<?php
namespace MohamedKaram\DesignPatterns\BehavioralPatterns\Strategy\Creators;

use MohamedKaram\DesignPatterns\BehavioralPatterns\Strategy\Interfaces\StrategyInterface;

class BankTransferStrategy implements StrategyInterface
{
    public function execute($type)
    {
        return 'BankTransferStrategy' . PHP_EOL;
    }
}