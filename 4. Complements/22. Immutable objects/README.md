# Notes of this lesson

```php
class Time
{
    protected $time = null;

    public function __construct($time = null)
    {
        $this->time = $time ?: time();
    }

    public function __toString()
    {
        return date('d-m-Y H:i:s', $this->time);
    }

    public function tomorrow()
    {
        return new static($this->time + 24*60*60); //With this line we return a new instance of our object plus 1 day.
    }

    public function yesterday()
    {
        return new static($this->time - 24*60*60); //With this line we return a new instance of our object less 1 day.
    }
}

$time = new Time();

echo "<p>Today is $time</p>";

echo "<p>Tomorrow is going to be {$time->tomorrow()}</p>";

echo "<p>Tomorrow was {$time->yesterday()}</p>";
```

`Time` is an __immutable object__ because none of its methods change its state.