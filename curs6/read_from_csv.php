<?php

$file = fopen("reports.csv", "r");

echo '<pre>';
$persons = [];
$columns = fgetcsv($file);
while ($person = fgetcsv($file)) {
    foreach ($person as $key => $value) {
        $person[$columns[$key]] = $value;
        unset($person[$key]);
    }
    $persons[] = $person;
}

//TODO: de facut functie codul de mai sus si de folosit in reports.php.

echo '<pre>';
print_r($persons);
