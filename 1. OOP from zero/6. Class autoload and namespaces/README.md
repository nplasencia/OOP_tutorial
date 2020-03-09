# Notes of this lesson

## Autoload
When we create a class, we save it on a new file and we use the function _require_ or _include_ to add it to our file. But, if we have a lot of classes, we will have a lot of require lines in our code.

To solve it, PHP provides us the [__spl_autoload_register()__](https://www.php.net/manual/en/language.oop5.autoload.php) function. It is used automatically when our program does not find a class. It receives an anonymous function and, if we have a pattern with our files, it is easy to tell __spl_autoload_register()__ where to find them:

```php
spl_autoload_register(function ($className) {
    require "src/$className.php";
});
```

## Namespaces
What happens if exists two or more classes with the same name? We use __namespaces__. We declare it at the beginning of each class:

```php
namespace Nplasencia;
```

And, when we want to instantiate any of the classes that are included inside our namespace:

```php
$nau = new Nplasencia\Archer('Nau', new Nplasencia\EvasionArmor());
```

*Remember to modify the spl_autoload_register function:

```php
spl_autoload_register(function ($className) {
    if (strpos($className, 'Nplasencia\\') === 0) {
        $className = str_replace('Nplasencia\\', '', $className);
        
        if (file_exists("src/$className.php")) {
            require "src/$className.php";
        }
    }
});
```

### - The _use_ operator

If we don't want to add the namespace to every class that we need, we can add the _use_ operator at the beginning of our file:

```php
use Nplasencia\Archer;

$nau = Archer('Nau', new Nplasencia\EvasionArmor());
```

Or, declare the namespace that we are working on:

```php
namespace Nplasencia;

$nau = Archer('Nau', new Nplasencia\EvasionArmor());
```

Generally, with the _use_ operator we use an alias to help us.

```php
use Nplasencia\Archer as NplasenciaArcher;

$nau = NplasenciaArcher('Nau', new Nplasencia\EvasionArmor());
```


#### *Tips

 · The PHP standard says that we have to leave one blank line in the end of each .php file.
 
 · If we use a _helpers_ file, is a good practice to review if a function has been declared or not:
 
 ```php
if (!function_exists('functionName')) {
    function functionName()
    {
        echo "My new function helper";
    }
}
 ```