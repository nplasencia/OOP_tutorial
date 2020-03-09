# Notes of this lesson

## [Composer](https://getcomposer.org/)

Dependency manager for PHP.

1. Install composer.
1. Execute `composer init`.
1. Modify the file _composer.json_ and add the next lines:

    ```php
    "autoload": {
        "psr-4": {
            "NameSpace\\": "folderOfOurFiles/"
        }
    }
    ```

1. Execute `composer dump-autoload`.
1. We will have a new file called autoload.php inside our folder "vendor".
1. Add to our index file `require '../vendor/autoload.php';`.

If we want to add the helpers file to the composer autoload:

```php
"autoload": {
    "files": ["src/helpers.php"],
    "psr-4": {
        "NameSpace\\": "folderOfOurFiles/"
    }
}
```


#### Why is our program still working if we have deleted the __spl_autoload_register()__?

In our composer.json we have said that it has to autoload our classes using the standard [PSR-4](https://www.php-fig.org/psr/psr-4/). This defines the autoload standard.   

 