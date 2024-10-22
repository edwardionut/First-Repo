<?php

$cars = ['BMW', 'Volvo', 'Audi'];

$cars2 [] = 'Audi';
$cars2 [1] = 'Opel';
$cars2 [] = 'Dacia';

echo $cars[1]; // "1" ne arata a doua varianta

$names = [                  // se numeste array asociativ
    'nume1' => 'Edward',
    'nume2' => 'Ionut',
    'nume3' => 'Carolina',
    'nume4' => 'Petronela',
    'nume5' => 'Coseru',
];

echo '<br>';
echo $names ['nume3'];

$names2 ['nume1'] = 'Edward'; // alta scriere
$names2 ['nume2'] = 'Ionut';

$garage = [ // un array cu mai multe array-uri (se mai numeste array multidimensional)
    ['brand' => 'BMW', 'gas_type' => 'diesel', $cars, $names],
    ['brand' => 'Audi', 'gas_type' => 'GPL'],
];

echo '<br>';
echo $garage[1]['brand'];
echo '<br>';
echo $garage[0][0][0]; // al doilea [0] este pentru elementul $cars si al 3-lea [0] este pentru 'BMW'
echo '<br>';
echo $garage[0][1]['nume1'];

foreach($garage as $key =>$car) {
    echo '<br>' . $key . '. ' . $car['brand'];
}

echo '<hr>';

$animals = ['dog', 'cat', 'mouse', 'elephant', 'bird'];
sort($animals);
print_r($animals);
echo '<br>';
rsort($animals);
print_r($animals);

echo '<hr>';

$colors = [
    'color1' => 'red',
    'color2' => 'green',
    'color3' => 'blue',
    'color4' => 'yellow',
    'color5' => 'black',
];
asort($colors);
print_r($colors);
echo '<br>';
ksort($colors);
print_r($colors);

echo '<hr>';

$cities = [
    'city2' => 'Bucharest',
    'city5' => 'Cluj',
    'City1' => 'Timisoara',
    'City7' => 'Iasi',
];
arsort($cities);
print_r($cities);
echo '<br>';
krsort($cities);
print_r($cities);
echo '<br>';

if (in_array('Timisoara', $cities)) {
    echo 'Timisoara is found in the array.';
} else {
    echo 'Timisoara is not found in the array.';
}

echo '<hr>';

$citiesMultiple = array_chunk($cities, 2, true);
echo '<pre>';
print_r($citiesMultiple);

echo '<hr>';

$column = array_column($garage, 'brand');
print_r($column);

echo '<hr>';

$array_keys = ['first', 'second'];
$array_values = ['Marian', 'Alex'];
$array__combined = array_combine($array_keys, $array_values);
print_r($array__combined);
