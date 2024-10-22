<?php

function eliminaVocale ($string) {
    $vocale = ['a', 'e', 'i', 'o', 'u'];
    $stringFaraVocale = str_replace ($vocale, '', $string);
    return $stringFaraVocale;
}
$input = 'Text cu vocale';
$output = eliminaVocale($input);
echo $output;

echo '<hr>';

function statisticaCaractere ($string) {
    $statistica = [];
    foreach (str_split($string) as $caracter) {
        $statistica [$caracter] = ($statistica[$caracter] ?? 0) +1;
    }
    return $statistica;
}
$string = 'acasa';
print_r (statisticaCaractere ($string));

echo '<hr>';

function dimensiuneEgala ($string, $dimensiune) {
    foreach (explode(' ', $string) as $cuvant) {
        if (strlen($cuvant) == $dimensiune) {
            echo $cuvant . '<br>';
        }
    }
}
$string = 'Propozitie de proba';
$dimensiune = 5;
dimensiuneEgala ($string, $dimensiune);
