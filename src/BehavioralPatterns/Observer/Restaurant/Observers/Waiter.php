<?php
namespace MohamedKaram\DesignPatterns\BehavioralPatterns\Observer\Restaurant\Observers;

use SplObserver;
use SplSubject;

class Waiter implements SplObserver
{
    private string $tableNumber;

    public function __construct($tableNumber)
    {
        $this->tableNumber = $tableNumber;
    }

    /**
     * @param \SplSubject $subject
     * @return void
     */
    public function update(SplSubject $subject): void
    {
        echo "Waiter for table {$this->tableNumber} was notified: Order completed for table {$subject->getTableNumber()}\n";
    }
}