<?php

require_once 'Vehicul.php';
class Motocicleta extends Vehicul
{
    public function claxoneza()
    {
        echo 'Motocicleta ' . $this->model . ' ' . $this->marca . ' claxoneaza. <br>';
    }

    public function semnalizeaza()
    {
        echo 'Motocicleta ' . $this->model . ' ' . $this->marca . ' semnalizeaza. <br>';
    }
}