<?php
namespace MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\PaymentExmple;

use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\PaymentExmple\Intefaces\PaymentInterface;

class Payment
{
    private $payment;

    public function __construct(PaymentInterface $payment)
    {
        $this->payment = $payment;
    }

    public function payment()
    {
        return $this->payment->pay();
    }

}