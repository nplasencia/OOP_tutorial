<?php

namespace Nplasencia;

class User extends Model
{
    public function getFirstNameAttribute($value)
    {
        return strtoupper($value);
    }
}
