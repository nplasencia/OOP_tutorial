<?php

namespace Demo;

class Renault extends Car
{
    private $price = 10000;

    public function __construct()
    {
        parent::__construct('Renault');
    }

    public function getBrandPrice() {
        return $this->price;
    }
}
