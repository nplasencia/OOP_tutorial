<?php

namespace Demo;

require('Car.php');
require('Mercedes.php');
require('Audi.php');
require('Renault.php');

$cars[] = new Mercedes();
$cars[] = new Audi();
$cars[] = new Renault();

foreach ($cars as $car) {
    echo "<p>This car of brand {$car->getBrand()} costs {$car->getBrandPrice()}</p>";
}
