<?php
namespace MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\PaymentExmple\Payments;

use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\PaymentExmple\Intefaces\PaymentInterface;

class PaypalPayment implements PaymentInterface
{
    public function pay(): string
    {
        return 'from PaypalPayment payment class';
    }
}