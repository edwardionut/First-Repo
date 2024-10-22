<?php

function textInFisier ($fisier, $text, $numar) {
    $numeFisier = fopen($fisier, "w");
    if ($numeFisier) {
        for ($i = 1; $i <= $numar; $i++) {
            fwrite($numeFisier, $text . "\n");
        }
        fclose($numeFisier);
    }
}
textInFisier("FisierPentruTema", "Text pentru tema", "3");

function douaFisiere ($fisier1, $fisier2) {
    if (file_exists($fisier1)) {
        file_put_contents($fisier2, file_get_contents($fisier1), FILE_APPEND);
    }
}
douaFisiere ("FisierPentruTema", "log.txt");
