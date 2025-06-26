<?php

namespace MohamedKaram\DesignPatterns\BehavioralPatterns\Observer\Restaurant\Observers;

use SplObserver;
use SplSubject;

class Cashier implements SplObserver
{
    public function update(SplSubject $subject): void
    {
        echo "Cashier: Preparing bill for table {$subject->getTableNumber()}\n";
    }
}
