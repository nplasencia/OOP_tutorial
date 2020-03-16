# Notes of this lesson

### 1. clone

All the objects are passed by reference so, if we want to create a copy of an object, we can use the reserved word clone.

```php
$lunchBox = new LunchBox(['Sandwich']);

$joanie->setLunch(clone($lunchBox));
$haley->setLunch(clone($lunchBox));
```

### 1. __clone()

It is called when we try to clone with an object.
