<?php

namespace Nplasencia;

class Str
{
    /**
     * first_name -> FirstName
     *
     * @param $value
     *
     * @return string
     */
    public static function studly($value)
    {
        return str_replace(' ', '', ucwords(str_replace('_', ' ', $value)));
    }
}
