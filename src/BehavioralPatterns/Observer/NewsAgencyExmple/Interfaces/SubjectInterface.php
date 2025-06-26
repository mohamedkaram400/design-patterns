<?php
namespace MohamedKaram\DesignPatterns\BehavioralPatterns\Observer\NewsAgencyExmple\Interfaces;

use MohamedKaram\DesignPatterns\BehavioralPatterns\Observer\NewsAgencyExmple\Interfaces\ObserverInterface;

interface SubjectInterface
{
    public function attach(ObserverInterface $observer): void;
    public function detach(ObserverInterface $observer): void;
    public function notify(): void;
}