<?php

echo 5 + 7; 
echo '<br>';
echo 10 - 5; 
echo '<br>';
echo 2 * 2; 
echo '<br>';
echo 10 / 5; 
echo '<br>';
echo 10 % 2; 
echo '<br>';
echo 2 ** 10; 
echo '<br>';

echo (2 + 3) * 5; // paranteza are prioritate
echo '<br>';

$a = 5; // $a++ -> $a = $a + 1
echo $a++; // post incrementare
echo '<br>';
echo ++$a; // pre incrementare
echo '<br>';

$b = 7;
echo $b--; // postdecrementare
echo '<br>';
echo --$b; // predecrementare
echo '<br>';

$x = 10; 
$y = 5;
echo $x += $y; // $x = $y + $x
echo '<br>';
echo $x -= $y;
echo '<br>';
echo $x *= $y;
echo '<br>';
echo $x /= $y;
echo '<br>';
echo $x .= $y; // $x = $x . $y (punctul inseamna concatenare = lipire)
echo '<br>';