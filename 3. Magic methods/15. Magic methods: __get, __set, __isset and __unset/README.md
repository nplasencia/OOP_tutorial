# Notes of this lesson

Suppose this code:

```php
class User
{
    //
}

$user = new User();
$user->full_name = 'Nauzet Plasencia';

echo "<p>Welcome {$user->full_name}</p>";
```

It will work because PHP is a dynamic language. Thus, if we assign a value to a property that does not exist, PHP will create it dynamically as a public property. But this is considered as a bad practice. You must declare all the properties that you are going to use in every class.

So... why don't try to create every property dynamically in the class User?

```php
class User
{
    public function __construct(array $attributes = [])
    {
        foreach ($attributes as $key => $value) {
            $this->$key = $value; //Very important here: we are using the variable $key, to create each property dynamically.
        }
    }
}

$user = new User(['full_name' => 'Nauzet Plasencia']);

echo "<p>Welcome {$user->full_name}</p>";

```

This also works, but as we have said, is not a good practice. For that, we change our User class:

```php
class User
{
    protected $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }
}

$user = new User([
        'first_name' => 'Nauzet',
        'last_name'  => 'Plasencia'
    ]
);

echo "<p>Welcome {$user->first_name} {$user->last_name}</p>"; // It will throw a notice and it will only print "Welcome  "
```

If we try to access to a property that is not defined, PHP will send a notice to us.

## [Magic methods in PHP](https://www.php.net/manual/en/language.oop5.magic.php)

### 1. __get($name)

If we define this magic method in our class, it will be called when PHP does not find a property in this class.

```php
class User
{
    protected $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }
    
    public function __get($name)
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }
        // If not, PHP will return null
    }
}

$user = new User([
        'first_name' => 'Nauzet',
        'last_name'  => 'Plasencia'
    ]
);

echo "<p>Welcome {$user->first_name} {$user->last_name}</p>"; //Now, it will work perfectly. Laravel uses it.
```

It is a good practice to take the logic inside our magic methods and write it in other method inside our class. It will help us if we need to use this logic without calling the magic method.

```php
class User
{
    protected $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function getAttribute($name)
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }
    }

    public function __get($name)
    {
        return $this->getAttribute($name);
    }
}
```

### 2. __set($name, $value)

But... what happen if we want to add a new property after instantiate our object?

```php
$user = new User([
        'first_name' => 'Nauzet',
        'last_name'  => 'Plasencia'
    ]
);

$user->nickname = 'nplasencia';

echo "<p>Nickname: {$user->nickname}</p>";

echo "<p>Welcome {$user->first_name} {$user->last_name}</p>";
```

Everything works perfectly. But, if we make a `var_dump($user)` we will see this:

```
object(Nplasencia\User)[3]
  protected 'attributes' => 
    array (size=2)
      'first_name' => string 'Nauzet' (length=6)
      'last_name' => string 'Plasencia' (length=9)
  public 'nickname' => string 'nplasencia' (length=10)
```

As you can think, we don't want the property 'nickname' as a public property. We would like to add it to our attributes Array. How can we solve it?

```php
class User
{
    protected $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function setAttribute($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function __set($name, $value)
    {
        $this->setAttribute($name, $value);
    }
}

$user = new User([
        'first_name' => 'Nauzet',
        'last_name'  => 'Plasencia'
    ]
);

$user->nickname = 'nplasencia';
//var_dump($user);
```

And now, everything works as we expected.

```
object(Nplasencia\User)[3]
  protected 'attributes' => 
    array (size=3)
      'first_name' => string 'Nauzet' (length=6)
      'last_name' => string 'Plasencia' (length=9)
      'nickname' => string 'nplasencia' (length=10)
```

### 3. __isset($name)

Imagine that we want to show the property 'nickname' if it is defined:

```php
$user = new User();
$user->fill([
    'first_name' => 'Nauzet',
    'last_name'  => 'Plasencia'
]);

$user->nickname = 'nplasencia';

echo "<p>Welcome {$user->first_name} {$user->last_name}</p>";

if (isset($user->nickname)) {
    echo "<p>Nickname: {$user->nickname}</p>"; // It won't work as we expect.
}
```

We solve it using the magic method `__isset()`:

```php
class User
{
    protected $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function __isset($name)
    {
        return isset($this->attributes[$name]);
    }
}
```

### 4. __unset($name)

With this magic method we can unset a property of our class:

```php
class User
{
    protected $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function __unset($name)
    {
        unset($this->attributes[$name]);
    }
}
```
