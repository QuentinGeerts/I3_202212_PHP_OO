<?php

include "Personne.php";

class Homme extends Personne
{
    public bool $longueurBarbe;

    public function __construct($nom, $prenom, $longueurBarbe) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->longueurBarbe = $longueurBarbe;
    }

    public function parler($message)
    {
        parent::parler($message);
        echo "<p> en ce dépêchant! </p>";
    }

    public function rire()
    {
        echo "<p>$this->prenom rie fortement</p>";
    }
}


$h = new Homme("Geerts", "Quentin", 0.5);
$h->parler("Coucou les WEB");

$h->rire();