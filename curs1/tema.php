<?php

function afiseazaValoarea ($param)
{
    echo 'Ati introdus valoarea: ' . $param . '<br>';
}

afiseazaValoarea (5);


function adunare (int $param1, int $param2)
{
    echo ($param1 + $param2);
}

adunare (2, 5);


function adunare (int $param = 2, int $param2, int $param3 = 4)
{
    echo ($param1 + $param2 + $param3);
}

adunare (2, 3);


function adunare (int $param1, int $param2)
{
    return $param1 + $param2;
}

$rezultat = adunare (2, 3);
echo $rezultat;
