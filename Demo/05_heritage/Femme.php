<?php

include "Personne.php";

class Femme extends Personne
{
    public bool $estEnceinte;

    public function __construct($nom, $prenom, $estEnceinte) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->estEnceinte = $estEnceinte;
    }

    public function parler($message)
    {
        echo "<p>$this->prenom dit doucement '$message'</p>";
    }

}

$f = new Femme("Geerts", "Mélanie", false);
$f->parler("Coucou les WEB");
