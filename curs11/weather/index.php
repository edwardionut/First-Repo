<?php

require_once 'Spring.php';
require_once 'Summer.php';
require_once 'Autumn.php';
require_once 'Winter.php';

$weather = new Spring(15, 50, 5);

echo $weather->getMeteo();

echo '<hr>';

$weather = new Summer(30, 5, 5);

echo $weather->getMeteo();

echo '<hr>';

$weather = new Autumn(20, 50, 5);

echo $weather->getMeteo();

echo '<hr>';

$weather = new Winter(0, 80, 10);

echo $weather->getMeteo();