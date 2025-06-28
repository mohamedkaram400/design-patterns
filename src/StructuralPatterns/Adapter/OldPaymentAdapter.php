<?php
namespace MohamedKaram\DesignPatterns\StructuralPatterns\Adapter;

use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\Adaptee\OldPayment;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\Intefaces\PaymentInterface;

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