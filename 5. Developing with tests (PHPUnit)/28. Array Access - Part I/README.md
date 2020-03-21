# Notes of this lesson

Imagine this test:

```php
class ArrayAccessTest extends TestCase
{

    public function test_a_model_has_array_access()
    {
        $user = new UserTest([
           'name' => 'Nauzet Plasencia',
           'email' => 'nauzet.plasencia.cruz@gmail.com',
           'web' => 'https://alcanzandoloinutil.com'
        ]);

        $this->assertSame('Nauzet Plasencia', $user->name);
    }
}

class UserTest extends Model
{

}
```
If I execute the test, everything will be fine.
 
But know, imagine that we want to access to the property `$user->name` as an array (`$user['name']`). We will have a failure in our test.

To solve it, we have to implement the interface `ArrayAccess`:

```php
class UserTest extends Model
{
    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }
}
```

## TIPS:

If we have an error in our code, when we execute the test, it is possible that we can see it. So, for that, we can create the file `bootstrap.php`:

```php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

require 'vendor/autoload.php';
```

And use it in our `phpunit.xml`:

```xml
<?xml version="1.0" encoding="UTF-8"?>
<phpunit
    colors="true"
    bootstrap="bootstrap.php">
    <testsuites>
        <testsuite>
            <directory>tests</directory>
        </testsuite>
    </testsuites>
</phpunit>
```

Now, we will read the error/s in our terminal with the tests.
