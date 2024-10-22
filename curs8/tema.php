<?php

function random($vector) {
    $cars = array_rand($vector);
    return $vector[$cars];
}

$cars = ['BMW', 'Audi', 'Mercedes', 'Dacia'];
$car = random($cars);
echo $car;