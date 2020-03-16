# Notes of this lesson

### 0. [Serialize()](https://www.php.net/manual/en/function.serialize.php)

It is a method that lets us to convert an object on a flux of data that we can transfer trough the net (using an API, for example) or to save it in a database, file, etc..

```php
$user = new User(['name' => 'Nauzet', 'email' => 'nauzet.plasencia.cruz@gmail.com']);

echo serialize($user);
```

Returns:

```
O:15:"Nplasencia\User":1:{s:13:"*attributes";a:2:{s:4:"name";s:6:"Nauzet";s:5:"email";s:31:"nauzet.plasencia.cruz@gmail.com";}}
```

### 1. [__sleep()](https://www.php.net/manual/en/language.oop5.magic.php#object.sleep)

If it is defined in a class, it will be called before serialize to 'clean' the object and serialize only what we need. It does not accept any argument and must return an array with the name of the properties that we want to serialize.

### 2. [__wakeup()](https://www.php.net/manual/en/language.oop5.magic.php#object.wakeup)

Actions that we have to perform when we unserialize() an object. It does not return anything.
