<?php

namespace Nplasencia;


class Food extends Model
{
    public function getBeverageAttribute()
    {
        return $this->attributes['beverage'] ?? false;
    }
}