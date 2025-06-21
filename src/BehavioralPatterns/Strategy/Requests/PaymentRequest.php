<?php
namespace MohamedKaram\DesignPatterns\BehavioralPatterns\Strategy\Requests;

class PaymentRequest
{
    public function __construct(
        public string $method,
        public float $amount,
        public array $meta = []
    ) {}
}