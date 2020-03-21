# Notes of this lesson

Como vimos en las lecciones sobre la interfaz ArrayAccess no podíamos probar la implementación de esta interfaz directamente con la clase Model. Debido a que la clase Model por ser una clase abstracta no se puede instanciar directamente. Cuando esto ocurre, la solución más común es crear una clase que extienda de la clase abstracta. Sin embargo a partir de PHP 7 podemos sacarle provecho a un nuevo tipo de clase llamada Clase Anónima y esto es lo que vamos a aprender en esta lección: el uso de clases anónimas en pruebas unitarias.

In the last lessons, we had to create a class called `UserTest` because we were not able to make the tests directly to our class `Model` because is an abstract class.

After PHP7, we can do it using __anonymous classes__:

Last code:

```php
// [...]
    public function test_offset_get()
    {
        $user = new UserTest([
           'name' => 'Nauzet Plasencia',
           'email' => 'nauzet.plasencia.cruz@gmail.com',
           'web' => 'https://alcanzandoloinutil.com'
        ]);

        $this->assertSame('Nauzet Plasencia', $user['name']);
        $this->assertSame('nauzet.plasencia.cruz@gmail.com', $user['email']);
    }
// [...]
```

New code:

```php
// [...]
    public function test_offset_get()
    {
        $user = new class([
           'name' => 'Nauzet Plasencia',
           'email' => 'nauzet.plasencia.cruz@gmail.com',
           'web' => 'https://alcanzandoloinutil.com'
        ]) extends Model {

        };

        $this->assertSame('Nauzet Plasencia', $user['name']);
        $this->assertSame('nauzet.plasencia.cruz@gmail.com', $user['email']);
    }
// [...]
```

## Anonymous classes

```php
// [...]
    public function test_offset_get()
    {
        $user = new class([
            // Here we can add the values to the construct.
        ]) extends Model {
            // Here we can define the body of our class
        };

        $this->assertSame('Nauzet Plasencia', $user['name']);
        $this->assertSame('nauzet.plasencia.cruz@gmail.com', $user['email']);
    }
// [...]
```

For example, we can overwrite the `attributes` array that we have in our Model class:

```php
$user = new class extends Model
{
    protected $attributes = [
        'name'  => 'Nauzet Plasencia',
        'email' => 'nauzet.plasencia.cruz@gmail.com',
        'web'   => 'https://alcanzandoloinutil.com'
    ];
};
```

And we can also overwrite the functions defined in our class:

```php
$user = new class extends Model
{
    protected $attributes = [
        'name'  => 'Nauzet Plasencia',
        'email' => 'nauzet.plasencia.cruz@gmail.com',
        'web'   => 'https://alcanzandoloinutil.com'
    ];
    
    public function fill(array $attributes = [])
    {
        $this->attributes = array_merge($this->attributes, $attributes);
    }
};
```