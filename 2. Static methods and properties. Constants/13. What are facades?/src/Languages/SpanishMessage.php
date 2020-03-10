<?php

namespace Nplasencia\Languages;

use Nplasencia\Language;

class SpanishMessage implements Language
{
    protected static $messages = [
        'BasicBowAttack'   => ':unit lanza una flecha a :opponent',
        'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
        'CrossBowAttack'   => ':unit lanza una flecha a :opponent usando la ballesta',
        'FireBowAttack'    => ':unit lanza una flecha de fuego a :opponent',
        'Attack'           => ':unit ataca a :opponent',
    ];

    public static function getMessageByKey($key)
    {
        return static::$messages[$key];
    }
}
