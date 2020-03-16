<?php

require '../vendor/autoload.php';

use Nplasencia\User;
use Nplasencia\LunchBox;

$gordon = new User(['name' => 'Gordon']);

// Daughters

$joanie = new User(['name' => 'Joanie']);
$haley = new User(['name' => 'Haley']);

// School

$lunchBox = new LunchBox(['Sandwich']);
$lunchBox2 = clone($lunchBox);

$joanie->setLunch($lunchBox);
$haley->setLunch(clone $lunchBox);

$joanie->eat();
$haley->eat();
