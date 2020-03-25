<?php

interface BirdInterface
{
    public function eat();
}

interface FlyingBirdInterface
{
    public function fly();
}

interface SwimmingBirdInterface
{
    public function swim();
}

class Parrot implements BirdInterface, FlyingBirdInterface
{
    public function eat()
    {
        // A parrot eats
    }

    public function fly()
    {
        // A parrot flies
    }
}

class Penguin implements BirdInterface, SwimmingBirdInterface
{
    public function eat()
    {
        // A penguin eats
    }

    public function swim()
    {
        // A penguin swims
    }
}
