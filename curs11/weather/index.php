<?php

require_once 'Spring.php';

$weather = new Spring(15, 50, 5);

echo $weather->getMeteo();