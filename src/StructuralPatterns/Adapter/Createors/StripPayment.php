<?php
namespace MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\Createors;

use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\Intefaces\PaymentInterface;

class StripPayment implements PaymentInterface
{
    public function pay(): string
    {
        return 'from StripPayment payment class';
    }
}