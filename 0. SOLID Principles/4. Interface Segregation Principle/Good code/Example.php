<?php

interface BirdInterface
{
    public function eat();
    public function fly();
    public function swim();
}

class Parrot implements BirdInterface
{
    public function eat()
    {
        // A parrot eats
    }

    public function fly()
    {
        // A parrot flies
    }

    public function swim()
    {
        // We don't need this method because a parrot doesn't swim
    }
}

class Penguin implements BirdInterface
{
    public function eat()
    {
        // A penguin eats
    }

    public function fly()
    {
        // A penguin is a bird, but it doesn't fly. It swims. So, for that, we don't need this method.
    }

    public function swim()
    {
        // A penguin swims.
    }
}
