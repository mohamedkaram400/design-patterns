<?php
namespace MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\PaymentExmple;

use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\PaymentExmple\Adaptee\OldPayment;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\PaymentExmple\Intefaces\PaymentInterface;

class OldPaymentAdapter implements PaymentInterface
{
    private OldPayment $oldPayment;

    public function __construct(OldPayment $oldPayment)
    {
        $this->oldPayment = $oldPayment;
    }

    public function pay(): string
    {
        return $this->oldPayment->makePayment();
    }
}