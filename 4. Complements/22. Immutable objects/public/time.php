<?php

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
        return new static($this->time + 24*60*60);
    }

    public function yesterday()
    {
        return new static($this->time - 24*60*60);
    }
}

$time = new Time();

echo "<p>Today is $time</p>";

echo "<p>Tomorrow is going to be {$time->tomorrow()}</p>";

echo "<p>Tomorrow was {$time->yesterday()}</p>";
