<?php

function exportToCSV(array $persons, string $fileName, string $fileMode) {
    $file = fopen($fileName, $fileMode);

    fwrite($file, implode(",", array_keys($persons[0])));
    fwrite($file, "\n");
    foreach ($persons as $person) {
        fwrite($file, implode(",", $person) .  "\n");
    }

    fclose($file);
}
