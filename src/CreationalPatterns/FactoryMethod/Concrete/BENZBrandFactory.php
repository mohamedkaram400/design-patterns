<?php

namespace MohamedKaram\DesignPatterns\CreationalPatterns\FactoryMethod\Concrete;

use MohamedKaram\DesignPatterns\CreationalPatterns\FactoryMethod\Product\BENZBrand;

class BENZBrandFactory implements BrandInterface
{

    public function BuildBrand(): BENZBrand
    {
        return new BENZBrand();
    }
}