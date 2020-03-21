<?php

namespace Nplasencia;

class User extends Model
{
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
