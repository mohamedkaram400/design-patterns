<?php
namespace MohamedKaram\DesignPatterns\StructuralPatterns\Adapter\Adaptee;

class OldPayment
{
    public function makePayment(): string
    {
        return 'from old payment class';
    }
}