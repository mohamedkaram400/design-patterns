<?php
namespace MohamedKaram\DesignPatterns\BehavioralPatterns\Observer\Restaurant;

use SplSubject;
use SplObserver;


class Restaurant implements SplSubject
{

    /** @var SplObserver[] */
    private $observers = [];
    private $tableNumber = 0;

    public function attach(SplObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers = array_filter($this->observers, fn($o) => $o !== $observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function setTableNumber(string $number): void
    {
        $this->tableNumber = $number;
        $this->notify();
    }

    public function getTableNumber(): string
    {
        return $this->tableNumber;
    }
}