# Notes of this lesson

### 1. [__toString()](https://www.php.net/manual/en/language.oop5.magic.php#object.tostring)

With this magic method, we can define what will be the behaviour of our class as a string. For example, if we try to do an `echo` of our object. 

### 2. [__invoke()](https://www.php.net/manual/en/language.oop5.magic.php#object.invoke)

With this help, we can call an object as a function.

Imagine that we create a function called `get($name)` in our class to get the specific attribute of our HtmlNode object. If we want to use it, we will make:

```php
$node->get('content');
```

If we want to call this method many times, it will be great do something like this:

```php
$node('content');
```

This can be done with the __invoke method.
