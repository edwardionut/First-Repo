<?php

require_once 'Matematica.php';
require_once 'Cerc.php';

Matematica::adunare(3, 7);
Matematica::adunare(5, 2);
echo '<hr>';
Matematica::scadere(7, 3);
Matematica::scadere(8, 3);
echo '<hr>';
Matematica::inmultire(9, 3);
Matematica::inmultire(10, 3);
echo '<hr>';
Matematica::impartire(12, 4);
Matematica::impartire(15, 5);
echo '<hr>';
Matematica::ridicareLaPutere(2, 2);
Matematica::ridicareLaPutere(3, 3);
echo '<hr>';

Cerc::$raza = 5;
Cerc::circumferinta();
Cerc::aria();

