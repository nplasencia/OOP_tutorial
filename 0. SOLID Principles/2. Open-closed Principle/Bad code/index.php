<?php

$brands = ['Mercedes', 'Audi'];
$cars = [];

foreach ($brands as $brand) {
    $cars[] = new Car($brand);
}

foreach ($cars as $car) {
    echo "<p>This car of brand {$car->brand} costs {$car->getBrandPrice()}</p>";
}
