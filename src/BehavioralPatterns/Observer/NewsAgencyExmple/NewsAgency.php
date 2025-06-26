<?php
namespace MohamedKaram\DesignPatterns\BehavioralPatterns\Observer\NewsAgencyExmple;

use MohamedKaram\DesignPatterns\BehavioralPatterns\Observer\NewsAgencyExmple\Interfaces\SubjectInterface;
use MohamedKaram\DesignPatterns\BehavioralPatterns\Observer\NewsAgencyExmple\Interfaces\ObserverInterface;

class NewsAgency implements SubjectInterface
{
    private array $observers = [];
    private string $latestNews = '';

    public function attach(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(ObserverInterface $observer): void
    {
        $this->observers = array_filter($this->observers, fn($o) => $o !== $observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->latestNews);
        }
    }

    public function publishNews(string $news): void
    {
        $this->latestNews = $news;
        $this->notify();
    }
}