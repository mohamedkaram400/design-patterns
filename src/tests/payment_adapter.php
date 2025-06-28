<?php

namespace MohamedKaram\DesignPatterns\tests;

use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\OldPaymentAdapter;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\Adaptee\OldPayment;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\Createors\PaypalPayment;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\Intefaces\PaymentInterface;

require_once __DIR__ . '/../../vendor/autoload.php';


function payment(PaymentInterface $payment){
    return $payment->pay();
}
 


// ✅ New payment — no adapter needed:
$paypalPayment = new PaypalPayment();
var_dump(payment($paypalPayment));  // outputs: string from PaypalPayment payment class


// ✅ Old payment — requires adapter:
$oldPayment = new OldPayment();
$oldPaymentAdapter = new OldPaymentAdapter($oldPayment);
var_dump(payment($oldPaymentAdapter));  // outputs: string from OldPayment payment class