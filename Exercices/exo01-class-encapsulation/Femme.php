<?php

class Femme 
{

    public string $nom;
    public string $prenom;
    public string $dateNaissance;
    public bool $estEnceinte;

    function accoucher () {
        if (!$this->estEnceinte) return;

        echo "<p>J'accouche</p>";
        echo "<p>C'est " . (rand(0, 1) ? "une fille" : "un garçon" ) . "</p>";
        $this->estEnceinte = false;
        
    }

    function getEstEnceinte() {
        echo "<p>" . ($this->estEnceinte ? "Je suis enceinte" : "Je ne suis pas enceinte") . "</p>";
    }

    function setEstEnceinte() {
        $this->estEnceinte = true;
    }

}
