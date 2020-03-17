<?php

namespace Nplasencia;

class User extends Model
{
    protected $lunch;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->lunch = new LunchBox();
    }

    public function setLunch(LunchBox $lunch)
    {
        $this->lunch = $lunch;
    }

    public function eat()
    {
        if ($this->lunch->isEmpty()) {
            throw new \Exception("{$this->name} hasn't anything for eat :'(");
        }

        $food = $this->lunch->shift();

        echo "<p>{$this->name} has eaten $food</p>";
    }

    public function eatMeal()
    {
        $food = $this->lunch->filter(function ($food) {
            return !$food->beverage;
        });

        $beverages = $this->lunch->filter(function ($food) {
            return $food->beverage;
        });

        echo "<p>{$this->name} has {$this->lunch->count()} items.</p>";
        echo "<p>{$this->name} has {$beverages->count()} beverages.</p>";

        foreach ($food as $item) {
            echo "<p>{$this->name} is eating {$item->name}</p>";
        }

        foreach ($beverages as $item) {
            echo "<p>{$this->name} is drinking {$item->name}</p>";
        }
    }
}
