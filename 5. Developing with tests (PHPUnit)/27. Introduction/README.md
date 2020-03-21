# Notes of this lesson

## 1. PHPUnit installation using Composer

Add the dependencies in your composer.json file:

```php
// [...]
    "require-dev": {
        "phpunit/phpunit": "5.6.*"
    },
// [...]
```

And... `composer update`!!!

## 2. Creating our tests

1. We create our new Test as a class extending `PHPUnit\Framework\TestCase`:

    ```php
    use PHPUnit\Framework\TestCase;
    
    class StrTest extends TestCase
    {
        public function test_test()
        {
            if (Str::studly('name') != 'Name') {
                exit("The method Str::studly() using name doesn't return Name");
            }
    
            if (Str::studly('full_name') != 'FullName') {
                exit("The method Str::studly() using full_name doesn't return FullName");
            }
    
            exit('Everything was great!');
        }
    }
    ```

1. Execute `vendor/bin/phpunit folder_of_tests/`

## 3. Adding assertions

```php
use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
    public function test_test()
    {
        $this->assertSame(
            'Name', Str::studly('name'),
            'The method Str::studly() using name doesn\'t return Name' // This message is optional
        );

        $this->assertSame(
            'FullName', Str::studly('full_name'),
            'The method Str::studly() using full_name doesn\'t return FullName' // This message is optional
        );
    }
}
```

Execute `vendor/bin/phpunit folder_of_tests/ --color`

