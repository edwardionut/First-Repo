<?php

require_once 'Audi.php';
require_once 'Peugeot.php';

$audi = new Audi('A7', 'White');
$peugeot = new Peugeot('508', 'Black');

$audi->setSpeed(20);
$peugeot->setSpeed(20);

echo $audi;
echo '<br>';
echo $peugeot;
echo '<br>';
echo Car::SPEED_FOR_AUDI;