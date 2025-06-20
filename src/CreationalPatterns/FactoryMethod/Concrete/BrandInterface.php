<?php
namespace MohamedKaram\DesignPatterns\CreationalPatterns\FactoryMethod\Concrete;

use MohamedKaram\DesignPatterns\CreationalPatterns\FactoryMethod\Product\CarBrandInterface;

interface BrandInterface
{
    public function BuildBrand(): CarBrandInterface;
}