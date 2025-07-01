<?php

use PHPUnit\Framework\TestCase;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple\Car;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\PaymentExmple\Payment;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple\TurboEngineAdapter;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple\Adaptee\TurboEngine;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\CarExmple\Engines\NormalEngine;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\PaymentExmple\OldPaymentAdapter;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\PaymentExmple\Adaptee\OldPayment;
use MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\PaymentExmple\Payments\PaypalPayment;

class AdapterTest extends TestCase
{
    public function testCanStartNormalEngine()
    {
        $engine = new NormalEngine();
        $car = new Car($engine);
        $this->assertEquals('Start normal engine from turbo car', $car->startEngine());
    }

    public function testCanStartTurboEngine()
    {
        $engine = new TurboEngine();
        $adapter = new TurboEngineAdapter($engine);
        $car = new Car($adapter);
        $this->assertEquals('Start engine from turbo car', $car->startEngine());
    }

    public function testCanPaypalPaymentEngine()
    {
        $paypal = new PaypalPayment();
        $payment = new Payment($paypal);
        $this->assertEquals('from PaypalPayment payment class', $payment->payment());
    }

    public function testCanMakeOldPayemntEngine()
    {
        $engine = new OldPayment();
        $adapter = new OldPaymentAdapter($engine);
        $payment = new Payment($adapter);
        $this->assertEquals('from old payment class', $payment->payment());
    }
}