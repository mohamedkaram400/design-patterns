<?php
namespace MohamedKaram\DesignPatterns\BehavioralPatterns\Observer\NewsAgencyExmple\Observers;

use MohamedKaram\DesignPatterns\BehavioralPatterns\Observer\NewsAgencyExmple\Interfaces\ObserverInterface;

class User implements ObserverInterface
{
    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update($news)
    {
        echo "{$this->name} received news: {$news}" . PHP_EOL;
    }
}