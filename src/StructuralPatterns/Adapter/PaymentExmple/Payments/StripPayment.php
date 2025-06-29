<?php
namespace MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\PaymentExmple\Payments;

use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\PaymentExmple\Intefaces\PaymentInterface;

class StripPayment implements PaymentInterface
{
    public function pay(): string
    {
        return 'from StripPayment payment class';
    }
}