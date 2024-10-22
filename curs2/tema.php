<?php

$a = 1;
$b = 2;

var_dump ($a + $b);
echo '<br>';
var_dump ($a - $b);
echo '<br>';
var_dump ($a * $b);
echo '<br>';
var_dump ($a / $b);
echo '<br>';
var_dump ($a % $b);
echo '<br>';
var_dump ($a ** $b);
echo '<br>';

echo '<hr>';

$c = 5;

var_dump ($c >= 0);
echo '<br>';
var_dump ($c <= 10);
echo '<br>';

function multiplication ($c)
{
    if ($c >= 0 && $c <= 10)
    {
        echo "$c x 0 = " . ($c * 0) . "<br>";
        echo "$c x 1 = " . ($c * 1) . "<br>";
        echo "$c x 2 = " . ($c * 2) . "<br>";
        echo "$c x 3 = " . ($c * 3) . "<br>";
        echo "$c x 4 = " . ($c * 4) . "<br>";
        echo "$c x 5 = " . ($c * 5) . "<br>";
        echo "$c x 6 = " . ($c * 6) . "<br>";
        echo "$c x 7 = " . ($c * 7) . "<br>";
        echo "$c x 8 = " . ($c * 8) . "<br>";
        echo "$c x 9 = " . ($c * 9) . "<br>";
        echo "$c x 10 = " . ($c * 10) . "<br>";
    }
}

multiplication ($c);

echo '<hr>';

function compare ($param1, $param2)
{
    echo "$param1 < $param2: " . ($param1 < $param2 ? '2 este mai mic decat 3' : '2 nu este mai mic decat 3') . "<br>";
    echo "$param1 <= $param2: " . ($param1 < $param2 ? '2 este mai mic sau egal cu 3' : '2 nu este mai mic sau egal cu 3') . "<br>";
    echo "$param1 == $param2: " . ($param1 < $param2 ? '2 este egal cu 3' : '2 nu este egal cu 3') . "<br>";
    echo "$param1 >= $param2: " . ($param1 < $param2 ? '2 este mai mare sau egal cu 3' : '2 nu este mai mare sau egal cu 3') . "<br>";
    echo "$param1 > $param2: " . ($param1 < $param2 ? '2 este mai mare decat 3' : '2 nu este mai mare decat 3') . "<br>";
}

compare (2, 3);

echo '<hr>';

function ternar ($param1, $param2, $param3)
{
    if ($param2 <= 0 && $param3 <= 0)
    {
        echo $param2 = 1;
        echo $param3 = 2;
    }
}


ternar (2, 5, 7);

// REZOLVARE
