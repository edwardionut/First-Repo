<?php

function divizibil ($numar1, $numar2) {
    for ($a = $numar1; $a <= $numar2; $a++) {
        if ($a % 3 == 0) {
            echo $a . '<br>';
        }
    }
}
divizibil (3, 27);
echo '<hr>';

function numerePare ($vector) {
    $count = 0;
    foreach ($vector as $num) {
        if ($num % 2 == 0) {
            echo $num . '<br>';
            $count++;
        }
    }
}
numerePare ([1, 2, 3, 4, 5, 8, 12, 14, 35, 49]);
echo '<hr>';

function palindrom ($numar) {
    $original = strval($numar);
    $reversed = strrev($original);
    
    if ($original === $reversed) {
        echo $numar . ' este palindrom';
    } else
        echo $numar . ' nu este palindrom';
}
palindrom (12321);
echo '<br>';
palindrom (12389);
