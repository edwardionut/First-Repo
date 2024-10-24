<?php

namespace Garage;

require_once 'Vehicul.php';
class Masina extends Vehicul
{
    public function claxoneza()
    {
        echo 'Masina ' . $this->marca . ' ' . $this->model . ' claxoneaza. <br>';
    }

    public function semnalizeaza()
    {
        echo 'Masina ' . $this->marca . ' ' . $this->model . ' semnalizaza. <br>';
    }
}