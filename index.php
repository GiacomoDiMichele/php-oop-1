<?php

class Movies
{
    public $titolo;
    public $anno_uscita;
    public $regista;
    public $durata;

    function __construct($_titolo, $_anno_uscita) {
        $this->titolo = $_titolo;
        $this->anno_uscita = $_anno_uscita;
    }

    public function getTitle() {
        return $this->titolo;
    }

    public function getYear() {
        return $this->anno_uscita;
    }
}

$batman_movie = new Movies('The dark knight', '2008');

    echo $batman_movie-> getTitle();
    echo $batman_movie-> getYear();




$spiderman_movie = new Movies('Spiderman', '2005');


    echo $spiderman_movie-> getTitle();
    echo $spiderman_movie-> getYear();


 ?>
