<?php

require_once 'Produs.php';
class Telefon extends Produs
{
    private string $descriere;
    private string $disponibilitate;

    public function __construct($numeProdus, $pret, $descriere, $disponibilitate)
    {
        parent::__construct($numeProdus, $pret);
        $this->descriere = $descriere;
        $this->disponibilitate = $disponibilitate;
    }

    public function __toString() {
        return "Produsul: $this->numeProdus, cu urmatoarea descriere: $this->descriere, avand pretul: $this->pret, este: $this->disponibilitate";
    }

}