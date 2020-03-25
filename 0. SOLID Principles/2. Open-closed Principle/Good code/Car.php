<?php

namespace Demo;

abstract class Car
{
    protected $brand;

    public function __construct(string $brand)
    {
        $this->brand = $brand;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    abstract function getBrandPrice();
}
