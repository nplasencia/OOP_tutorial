<?php

require '../vendor/autoload.php';

use Nplasencia\User;
use Nplasencia\LunchBox;

$gordon = new User(['name' => 'Gordon']);

// Daughters

$joanie = new User(['name' => 'Joanie']);

// House

$lunchBox = new LunchBox(['Sandwich', 'Fries', 'Orange juice', 'Apple']);

$joanie->setLunch($lunchBox);

// School

$joanie->eatMeal();
