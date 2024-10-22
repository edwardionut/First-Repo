<?php

require_once 'Car.php';

$bmw = new Car('520');
//$bmw -> setModel('525');

$audi = new Car('520');
$audi -> setModel('a4');

var_dump($bmw, $audi);

echo '<br>';
echo $bmw -> model;
echo '<br>';
echo $audi -> model;

//unset($bmw);
//unset($audi);