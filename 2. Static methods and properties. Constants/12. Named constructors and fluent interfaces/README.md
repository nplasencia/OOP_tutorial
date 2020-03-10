# Notes of this lesson

## Named constructors

Imagine that you want to create 30 instances of the class Unit as a Soldier with a Basic Sword and a Bronze Armor. You must to do something like this:

```php
$nau = new Unit('Nau', new BasicSword);
$nau->setArmor(new BronzeArmor);

$silence = new Unit('Silence', new BasicSword);
$silence->setArmor(new BronzeArmor);

// And repeat 30 times.
```

It can be solved using a __named constructor__. To create it you only need to create a static method that creates and returns a new instance of a class:

```php
// Inside the class Unit we declare this static method
public static function createSoldier($name)
{
    $unit = new Unit($name, new BasicSword());
    $unit->setArmor(new BronzeArmor());

    return $unit;
}
```

```php
// And now we can call it in our index.php.
$silence = Unit::createSoldier('Silence');
```

## Fluent interfaces

To create a __fluent interface__ you only have to remember to return `$this` after each function in your class. This interfaces are commonly used with methods that modify the state of an object (as a _setter_).

```php
$silence = Unit::createSoldier('Silence')
               ->setArmor(new SilverArmor())
               ->setWeapon(new FireBow());
```
