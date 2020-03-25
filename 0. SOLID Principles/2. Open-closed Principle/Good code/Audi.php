<?php

namespace Demo;

class Audi extends Car
{
    private $price = 13500;

    public function __construct()
    {
        parent::__construct('Audi');
    }

    public function getBrandPrice() {
        return $this->price;
    }
}
