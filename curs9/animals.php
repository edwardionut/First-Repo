<?php

require_once 'Dog.php';
require_once 'Cat.php';

$dog = new Dog('Thor', '3', '4', '10');

$dog->setLegs(6);

$dog->setHeight('20');

var_dump($dog->getHeight());
echo '<br>';

echo $dog;

echo '<br>';

$cat = new Cat('Tom', '4', '4', '5');

$cat->eyes = 2;

var_dump($cat);