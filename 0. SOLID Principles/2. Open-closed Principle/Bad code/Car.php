<?php

class Car
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

    public function getBrandPrice()
    {
        if ($this->brand == 'Mercedes') {
            return 15000;
        } else if ($this->brand == 'Audi') {
            return 13500;
        }
        return 0;
    }
}
