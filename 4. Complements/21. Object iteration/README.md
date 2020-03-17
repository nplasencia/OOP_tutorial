# Notes of this lesson

Imagine this case:

```php
class User extends Model
{
    protected $lunch; // It is a LunchBox object.

    // [...]

    public function eatMeal()
    {
        foreach ($this->lunch as $food) {
            echo "<p>{$this->name} is eating $food</p>";
        }
    }
}

class LunchBox
{
    protected $food = [];
    protected $original = true;

    // [...]
}

$joanie = new User(['name' => 'Joanie']);

$lunchBox = new LunchBox(['Sandwich', 'Fries', 'Orange juice', 'Apple']);
$joanie->setLunch($lunchBox);
$joanie->eatMeal(); // Joanie eats complete meal

```

It does not echo anything because this `foreach` iterates over the public properties that are defined in our class LunchBox.

Imagine that we change the properties of LunchBox to `public`. We will see that we are iterating over the properties of the object. It means that we will see 'food' and 'original'.

We can solve it creating a new method in our LunchBox class to get all the elements of the property food. But we can do it in a different way: __defining how iterate an object__.

## [Iterator interface](https://www.php.net/manual/en/language.oop5.iterations.php)

For that, we implements the interface `Iterator` in our class and implements the abstract methods defined by it (we have copied thw implementation from documentation):

```php
class LunchBox implements \Iterator
{
    protected $food = [];
    protected $original = true;

    public function __construct(array $food = [])
    {
        $this->food = $food;
    }

    public function rewind()
    {
        echo "<p>rewinding</p>";
        reset($this->food);
    }

    public function current()
    {
        $var = current($this->food);
        echo "<p>current: $var</p>";
        return $var;
    }

    public function key()
    {
        $var = key($this->food);
        echo "<p>key: $var</p>";
        return $var;
    }

    public function next()
    {
        $var = next($this->food);
        echo "<p>next: $var</p>";
        return $var;
    }

    public function valid()
    {
        $key = key($this->food);
        $var = ($key !== NULL && $key !== FALSE);
        echo "<p>valid: $var</p>";
        return $var;
    }
}
```

Now, with this, we will iterate over our protected property `food`.

## [IteratorAggregate](https://www.php.net/manual/en/class.iteratoraggregate.php)

If we have to write all the abstract methods defined in the Iterator interface... It could take a lot of time in our programs.

But we have another interface called __IteratorAggretate__.

```php
class LunchBox implements \IteratorAggregate
{
    protected $food = [];
    protected $original = true;

    // [...]

    public function getIterator()
    {
        return new \ArrayIterator($this->food);
    }
}
```

## [Countable](https://www.php.net/manual/en/class.countable)

If we modify the method eat in User like this:

```php
class User extends Model
{
    protected $lunch; // It is a LunchBox object.

    // [...]

    public function eatMeal()
    {
        $foodCount = count($this->lunch);
        echo "<p>{$this->name} has $foodCount items for eating.</p>";
    
        foreach ($this->lunch as $food) {
            echo "<p>{$this->name} is eating $food</p>";
        }
    }
}
```

In our screen we will see the message:

`Joanie has 1 items for eating`

To solve it we have to implement the __Countable__ interface and its abstract method `count()`:

```php
class LunchBox implements \IteratorAggregate
{
    protected $food = [];
    protected $original = true;

    // [...]

    public function getIterator()
    {
        return new \ArrayIterator($this->food);
    }
    
    public function count()
    {
        return count($this->food);
    }
}
```
