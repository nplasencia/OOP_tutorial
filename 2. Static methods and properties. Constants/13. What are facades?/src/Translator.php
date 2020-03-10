<?php

namespace Nplasencia;

class Translator
{
    public static $language;

    public static function set(Language $language)
    {
        static::$language = $language;
    }

    public static function get($key, array $params = array())
    {
        if ( ! static::has($key)) {
            return [$key];
        }

        return static::replaceParams(static::$language->getMessageByKey($key), $params);
    }

    public static function has($key)
    {
        return static::$language->getMessageByKey($key) !== null;
    }

    public static function replaceParams($message, array $params)
    {
        foreach ($params as $key => $value) {
            $message = str_replace(":$key", $value, $message);
        }

        return $message;
    }
}
