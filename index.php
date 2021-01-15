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

    echo '<h1> -' . $batman_movie-> getTitle() . '</h1>';
    echo '<h1>' .  $batman_movie-> getYear() . '</h1>';




$spiderman_movie = new Movies('Spiderman', '2005');


    echo '<div><h1> -' . $spiderman_movie-> getTitle() . '</h1></div>';
    echo '<h1>' . $spiderman_movie-> getYear() . '</h1>';


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <link rel="stylesheet" href="style.css">
         <title></title>
     </head>
     <body>

     </body>
 </html>
