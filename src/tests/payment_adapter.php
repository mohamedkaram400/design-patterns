<?php

namespace MohamedKaram\DesignPatterns\tests;

use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple\Car;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\PaymentExmple\Payment;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple\TurboEngineAdapter;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple\Adaptee\TurboEngine;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple\Engines\NormalEngine;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\PaymentExmple\OldPaymentAdapter;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\PaymentExmple\Adaptee\OldPayment;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\PaymentExmple\Payments\PaypalPayment;

require_once __DIR__ . '/../../vendor/autoload.php';


// Payment Exmple 

// ✅ New payment — no adapter needed:
$paypalPayment = new PaypalPayment();
$payment = new Payment($paypalPayment);  // outputs: string from PaypalPayment payment class
var_dump($payment->payment());    // outputs: string from PaypalPayment payment class


// ✅ Old payment — requires adapter:
$payment = new Payment(new OldPaymentAdapter(new OldPayment()));
var_dump($payment->payment());   // outputs: string from OldPayment payment class



// Car Exmple 

// ✅ New Engine — no adapter needed:
$normalEngine = new NormalEngine();
$normal = new Car($normalEngine); 
var_dump($normal->startEngine());    


// ✅ Turbo Engine — requires adapter:
$turboCar = new Car(new TurboEngineAdapter(new TurboEngine()));
var_dump($turboCar->startEngine()); 