<?php
namespace MohamedKaram\DesignPatterns\CreationalPatterns\FactoryMethod;

require_once __DIR__ . '../../../vendor/autoload.php';

use InvalidArgumentException;
use MohamedKaram\DesignPatterns\CreationalPatterns\FactoryMethod\Concrete\BMWBrandFactory;
use MohamedKaram\DesignPatterns\CreationalPatterns\FactoryMethod\Concrete\BENZBrandFactory;

function clientCode(string $type)
{
    switch ($type) {
        case 'BMW':
            return new BMWBrandFactory();
        case 'BENZ':
            return new BENZBrandFactory();
        default:
            throw new InvalidArgumentException("Unsupported brand type");
    }
}

// 👇 Example Usage
$factory = clientCode('BMW'); // returns BMWBrandFactory
$product = $factory->BuildBrand(); // returns BMWBrand
echo $product->createBrand(); // Output: BMW Brand

$factory = clientCode('BENZ');
$product = $factory->BuildBrand();
echo $product->createBrand(); // Output: BENZ Brand
