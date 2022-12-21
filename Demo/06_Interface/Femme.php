<?php

include_once "Personne.php";
include_once 'ISens.php';

// Extends => permet d'étendre la classe à UNE SEULE classe 
// Implements => permet d'implémenter PLUSIEURS interfaces
class Femme extends Personne implements ISens
{
    public bool $estEnceinte;

    public function __construct($nom, $prenom, $estEnceinte)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->estEnceinte = $estEnceinte;
    }

    public function parler($message)
    {
        echo "<p>$this->prenom dit doucement '$message'</p>";
    }

    public function rire()
    {
        echo "<p>$this->prenom rigole !</p>";
    }

    public function entendre(): void
    {
        echo "<p>$this->prenom entend.</p>";
    }

    public function voir(): void
    {
        echo "<p>$this->prenom voit.</p>";
    }

    public function gouter(): void
    {
        echo "<p>$this->prenom goute.</p>";
    }
}

$f = new Femme("Geerts", "Mélanie", false);
$f->parler("Coucou les WEB");

$f->rire();

$f->gouter();
$f->voir();
$f->entendre();

