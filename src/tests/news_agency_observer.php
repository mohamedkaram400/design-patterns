<?php

namespace MohamedKaram\DesignPatterns\tests;

use MohamedKaram\DesignPatterns\BehavioralPatterns\Observer\NewsAgencyExmple\NewsAgency;
use MohamedKaram\DesignPatterns\BehavioralPatterns\Observer\NewsAgencyExmple\Observers\User;

require_once __DIR__ . '/../../vendor/autoload.php';

$agency = new NewsAgency();

$user1 = new User('Ahmed');
$user2 = new User('Ali');
$user3 = new User("Mohamed");
$user4 = new User("Karam");

$agency->attach($user1);
$agency->attach($user2);
$agency->attach($user3);
$agency->attach($user4);

$agency->publishNews("🚀 New PHP 9 Released!");

