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
}
