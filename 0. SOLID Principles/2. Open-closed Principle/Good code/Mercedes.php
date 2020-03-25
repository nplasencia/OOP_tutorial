<?php

namespace Demo;

class Mercedes extends Car
{
    private $price = 15000;

    public function __construct()
    {
        parent::__construct('Mercedes');
    }

    public function getBrandPrice() {
        return $this->price;
    }
}
