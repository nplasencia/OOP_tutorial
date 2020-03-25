<?php

use DB;

class CarRepository
{
    public function saveInDB(Car $car)
    {
        return DB::table('cars')->insert($car);
    }

    public function deleteFromDB(Car $car)
    {
        return DB::table('cars')->delete($car);
    }
}
