<?php

class Carte
{
    public $titlu;
    public $autor;
    public $an;
    public $pagini;

    public function __construct($titlu, $autor, $an, $pagini) {
        $this->titlu = $titlu;
        $this->autor = $autor;
        $this->an = $an;
        $this->pagini = $pagini;
    }

    public function afiseaza() {
        echo "$this->autor, '$this->titlu', numar pagini: $this->pagini, an aparitie: $this->an.";
    }
}