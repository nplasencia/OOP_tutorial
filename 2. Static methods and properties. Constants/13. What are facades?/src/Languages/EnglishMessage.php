<?php

namespace Nplasencia\Languages;

use Nplasencia\Language;

class EnglishMessage implements Language
{
    protected static $messages = [
        'BasicBowAttack'   => ':unit throws an arrow to :opponent',
        'BasicSwordAttack' => ':unit attacks with his sword to :opponent',
        'CrossBowAttack'   => ':unit throws an arrow to :opponent using the crossbow',
        'FireBowAttack'    => ':unit throws a fire arrow to :opponent',
        'Attack'           => ':unit attacks :opponent',
    ];

    public static function getMessageByKey($key)
    {
        return static::$messages[$key];
    }
}
