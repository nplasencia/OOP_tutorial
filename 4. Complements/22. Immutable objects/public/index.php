<?php

require '../vendor/autoload.php';

use Nplasencia\User;
use Nplasencia\LunchBox;
use Nplasencia\Food;

$gordon = new User(['name' => 'Gordon']);

// Daughters

$joanie = new User(['name' => 'Joanie']);

// House

$lunchBox = new LunchBox([
    new Food(['name' => 'Sandwich', 'beverage' => false]),
    new Food(['name' => 'Fries']),
    new Food(['name' => 'Water', 'beverage' => true]),
    new Food(['name' => 'Orange juice', 'beverage' => true]),
    new Food(['name' => 'Apple'])
]);

$joanie->setLunch($lunchBox);

// School

$joanie->eatMeal();
