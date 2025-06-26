<?php

namespace MohamedKaram\DesignPatterns\tests;

use MohamedKaram\DesignPatterns\BehavioralPatterns\Observer\Restaurant\Restaurant;
use MohamedKaram\DesignPatterns\BehavioralPatterns\Observer\Restaurant\Observers\Waiter;
use MohamedKaram\DesignPatterns\BehavioralPatterns\Observer\Restaurant\Observers\Cashier;

require_once __DIR__ . '/../../vendor/autoload.php';

$restaurant = new Restaurant();

$waiter1 = new Waiter("1");
$waiter2 = new Waiter("2");
$cashier = new Cashier();

$restaurant->attach($waiter1);
$restaurant->attach($waiter2);
$restaurant->attach($cashier);

$restaurant->setTableNumber("5"); 
