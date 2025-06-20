<?php

namespace MohamedKaram\DesignPatterns\CreationalPatterns\FactoryMethod\Product;

use MohamedKaram\DesignPatterns\CreationalPatterns\FactoryMethod\Product\CarBrandInterface;

class BMWBrand implements CarBrandInterface
{

    public function createBrand()
    {
        return 'BMW Brand';
    }
}  