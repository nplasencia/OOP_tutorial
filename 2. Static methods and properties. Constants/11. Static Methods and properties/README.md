# Notes of this lesson

```php
class Person
{
    protected static $name;

    public function __construct($name)
    {
        static::$name = $name;
    }

    public function getName()
    {
        return static::$name;
    }
}
```

## Static properties

A __static property__ is available as a global property. It does not belong to an instance of an object, it belongs to the class.

If we modify a static property it will affect to every instance of this class.

```php
$person1 = new Person('Nauzet');
$person2 = new Person('Ramon');

$person1->getName(); // It will return Ramon
```

#### Scope Resolution Operator (::)

We can't access a static property using `$this->staticProperty`. We need to use the __scope resolution operator (::)__: `static::$staticProperty`.

## Static methods

As the static properties, the __statics methods__ are available as a global method for a class and we don't need to create an instance of this object to use this method.

```php
class Translator
{
    protected static $messages = [];

    public static function set(array $messages)
    {
        static::$messages = $messages;
    }

    public static function get($key, array $params = array())
    {
        if ( ! static::has($key)) {
            return [$key];
        }

        return static::replaceParams(static::$messages[$key], $params);
    }

    public static function has($key)
    {
        return isset(static::$messages[$key]);
    }

    public static function replaceParams($message, array $params)
    {
        foreach ($params as $key => $value) {
            $message = str_replace(":$key", $value, $message);
        }

        return $message;
    }
}
```

Usually, they have used to do common operations to every object of the class. Don't affect their states.
