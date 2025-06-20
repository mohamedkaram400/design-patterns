<?php

namespace MohamedKaram\DesignPatterns\CreationalPatterns\FactoryMethod\Product;

use MohamedKaram\DesignPatterns\CreationalPatterns\FactoryMethod\Product\CarBrandInterface;

class BENZBrand implements CarBrandInterface
{

    public function createBrand()
    {
        return 'BENZ Brand';
    }
}