<?php

namespace MohamedKaram\DesignPatterns\tests;

use InvalidArgumentException;
use MohamedKaram\DesignPatterns\BehavioralPatterns\Strategy\Context;
use MohamedKaram\DesignPatterns\BehavioralPatterns\Strategy\PaymentProcessor;
use MohamedKaram\DesignPatterns\BehavioralPatterns\Strategy\ConcreteOneStrategie;
use MohamedKaram\DesignPatterns\BehavioralPatterns\Strategy\ConcreteStrategyFactory;
use MohamedKaram\DesignPatterns\BehavioralPatterns\Strategy\Requests\PaymentRequest;

require_once __DIR__ . '/../../vendor/autoload.php';


// function clientCode(string $type, $context)
// {
//     switch ($type) {
//         case 'one':
//             $context->setStrategy(new ConcreteOneStrategie());
//             break;
//         case 'two':
//             $context->setStrategy(new ConcreteTwoStrategie());
//             break;
//         default:
//             throw new InvalidArgumentException("Unsupported brand type");
//     }

//     return $context->executeStrategy($type);
// }

// // 👇 Example Usage
// $context = new Context();
// $strategy = clientCode('one', $context); 
// echo $strategy; 


$paymentRequest = new PaymentRequest('bank', 199.99);

$factory = new ConcreteStrategyFactory();
$strategy = $factory->createStrategy($paymentRequest->method);

$processor = new PaymentProcessor();
$processor->setStrategy($strategy);

$response = $processor->process($paymentRequest);
echo $response; 