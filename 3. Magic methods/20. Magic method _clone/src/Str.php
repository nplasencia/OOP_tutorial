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
        $result = ucwords(str_replace('_', ' ', $value));

        return ucwords(str_replace(' ', '', $result));
    }
}
