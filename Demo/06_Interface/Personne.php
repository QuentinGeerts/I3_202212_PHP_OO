<?php

abstract class Personne 
{
    public string $nom;
    public string $prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function parler ($message) {
        echo "<p>$this->prenom dit '$message'</p>";
    }

    abstract public function rire ();

}

?>