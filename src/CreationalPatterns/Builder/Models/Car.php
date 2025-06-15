<?php
namespace MohamedKaram\DesignPatterns\CreationalPatterns\Builder\Models;

class Car
{
    protected array $data = [];

    public function setParts(string $name, string $value): void
    {
        $this->data[$name] = $value;
    }

    public function getParts(): array
    {
        return $this->data;
    }
}