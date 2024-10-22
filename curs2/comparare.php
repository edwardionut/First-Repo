<?php

$a = 5;
$b = '5';

var_dump ($a == $b); // compara doar valorile, indiferent de tipul de date
echo '<br>';
var_dump ($a === $b); // compara valorile si tipul de date
echo '<br>';
var_dump ($a != $b); // compara daca valorile sunt diferite
echo '<br>';
var_dump ($a <> $b); // <> reprezinta acelasi lucru cu !=
echo '<br>';
var_dump ($a !== $b); // compara valorile si tipurile de date
echo '<br>';

$b = 8;
var_dump ($a > $b); 
echo '<br>';
var_dump ($a < $b);
echo '<br>';

$b = 5;
var_dump ($a >= $b);
echo '<br>';
var_dump ($a <= $b);
echo '<br>';

$b = 10;
var_dump ($a <=> $b); // daca este mai mic avem valoarea -1, daca este = avem valoarea 0, daca este mai mare avem valoare 1
echo '<br>';

$m = true;
$p = !$m; // negarea lui $m

var_dump ($p);
echo '<br>';

echo '<hr/>'; // afiseaza o linie de separare

var_dump (false $$ false); // && = si
echo '<br>';
var_dump (false $$ true);
echo '<br>';
var_dump (true $$ true);
echo '<br>';
var_dump (true $$ false);
echo '<br>';

var_dump (false || false); // || = sau
echo '<br>';
var_dump (false || true);
echo '<br>';
var_dump (true || true);
echo '<br>';
var_dump (true || false);
echo '<br>';

var_dump (5 < 3 xor 5 > 2); // afiseaza true cand o conditie este fals si o conditie este true
echo '<br>';

$q = 1; // 1 = true
$w = 0; // 0 = false
var_dump ($q || $w);
echo '<br>';

echo '<hr>';

$t = (2 > 3) ? 'true' : 'false';
var_dump ($t);
echo '<br>';

echo '<hr>';

$g = null;
$j = 3;

$x = $g ?? 10;
$y = $j ?? 10;
var_dump ($x, $y);
echo '<br>';
