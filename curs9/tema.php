<?php

require_once 'Produs.php';
require_once 'Telefon.php';

$produs = new Produs('Laptop', '5000');
echo $produs;

echo '<hr>';

$telefon = new Telefon('Samsung', '2500', 'S20 FE', 'disponibil');
echo $telefon;