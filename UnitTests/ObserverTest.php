<?php

use PHPUnit\Framework\TestCase;
use MohamedKaram\DesignPatterns\BehavioralPatterns\Observer\Restaurant\Restaurant;
use MohamedKaram\DesignPatterns\BehavioralPatterns\Observer\Restaurant\Observers\Waiter;
use MohamedKaram\DesignPatterns\BehavioralPatterns\Observer\Restaurant\Observers\Cashier;

class ObserverTest extends TestCase
{
    public function testObserversAreNotified()
    {
        $restaurant = new Restaurant();

        // Use output buffering to capture echo output
        $waiter = new Waiter("1");
        $cashier = new Cashier();

        $restaurant->attach($waiter);
        $restaurant->attach($cashier);

        // Capture output
        ob_start();
        $restaurant->setTableNumber("5");
        $output = ob_get_clean();

        // Test if both observers' messages are in the output
        $this->assertStringContainsString("Waiter for table 1 was notified: Order completed for table 5", $output);
        $this->assertStringContainsString("Cashier: Preparing bill for table 5", $output);
    }

    public function testDetachObserver()
    {
        $restaurant = new Restaurant();

        $waiter = new Waiter("1");

        $restaurant->attach($waiter);
        $restaurant->detach($waiter);

        ob_start();
        $restaurant->setTableNumber("3");
        $output = ob_get_clean();

        // No output expected from detached waiter
        $this->assertStringNotContainsString("Waiter", $output);
    }
}