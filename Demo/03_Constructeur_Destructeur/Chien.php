<?php
class Chien
{
    // Attributs | Propriétés | Caractéristiques
    // Caractéristiques de l'objet
    public string $nom;
    public string $race;
    public int $age;
    public string $couleur;

    // Constructeur
    public function __construct(string $nom, string $race, int $age, string $couleur)
    {
        echo "<p>Chien créé</p>";
        $this->nom = $nom;
        $this->race = $race;
        $this->age = $age;
        $this->couleur = $couleur;
    }

    public function __destruct()
    {
        echo "<p>Chien détruit</p>";
    }

    // Méthodes
    function abboyer()
    {
        echo "<p>Wouaf wouaf</p>";
    }

    // Valeur par défaut : $variable = valeur
    function manger(string $nourriture = "croquettes")
    {
        echo "<p>$this->nom mange $nourriture</p>";
    }
}
// Script logique

$kalhy = new Chien("Kalhy", "Husky Allemand", 2, "Gris brun");

// $kalhy->nom = "Kalhy";
// $kalhy->race = "Husky Allemand";
// $kalhy->couleur = "Gris brun";
// $kalhy->age = 2;

$kalhy->abboyer();
$kalhy->manger("Croquettes"); // Sortie : "Kalhy mange Croquettes"

