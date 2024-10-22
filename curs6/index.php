<?php

$file = fopen('log.txt', 'r') or die('Unable to open file!');
var_dump($file);
echo fread($file, filesize('log.txt'));
fclose($file);

$file2 = fopen('cars.txt', 'w');
fwrite($file2, 'BMW');
fclose($file2);

$file3 = fopen('cars.txt', 'a');
fwrite($file3, "\nAudi");
fclose($file3);

//fopen('cars.txt', 'x'); // to show that a warning is displayed when file exists


