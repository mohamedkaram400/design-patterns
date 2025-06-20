<?php

namespace MohamedKaram\DesignPatterns\CreationalPatterns\FactoryMethod\Concrete;

use MohamedKaram\DesignPatterns\CreationalPatterns\FactoryMethod\Product\BMWBrand;

class BMWBrandFactory implements BrandInterface
{

    public function BuildBrand(): BMWBrand
    {
        return new BMWBrand();
    }
}