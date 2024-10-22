<?php

class Produs
{
    protected string $numeProdus;
    protected string $pret;

    public function __construct(string $numeProdus, string $pret)
    {
        $this->numeProdus = $numeProdus;
        $this->pret = $pret;
    }

    public function __toString() {
        return "Produs: $this->numeProdus, pret: $this->pret" . '.';
    }
}