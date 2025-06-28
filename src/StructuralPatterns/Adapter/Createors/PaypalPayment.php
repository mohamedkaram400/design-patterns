<?php
namespace MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\Createors;

use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\Intefaces\PaymentInterface;

class PaypalPayment implements PaymentInterface
{
    public function pay(): string
    {
        return 'from PaypalPayment payment class';
    }
}