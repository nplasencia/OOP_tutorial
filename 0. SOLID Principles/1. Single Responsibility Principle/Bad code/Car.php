<?php

use DB;

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

    public function saveInDB()
    {
        return DB::table('cars')->save($this);
    }

    public function deleteFromDB()
    {
        return DB::table('cars')->delete($this);
    }
}
