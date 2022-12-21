<?php
class Chien
{
    // Attributs | Propriétés | Caractéristiques
    // Caractéristiques de l'objet
    public string $nom;
    public string $race;
    public int $age;
    public string $couleur;
    
    // Méthodes
    function abboyer() {
        echo "<p>Wouaf wouaf</p>";
    }

    // Valeur par défaut : $variable = valeur
    function manger(string $nourriture = "croquettes") {
        echo "<p>$this->nom mange $nourriture</p>";
    }
}
// Script logique

$kalhy = new Chien();

$titi = new Chien(); 

$kalhy->manger("Croquettes"); // Sortie : "mange Croquettes"

$kalhy->manger(); // Sortie : ""
$kalhy->manger(false); // Sortie : ""

$kalhy->nom = "Kalhy";
$kalhy->race = "Husky Allemand";
$kalhy->couleur = "Gris brun";
$kalhy->age = 2;

$kalhy->abboyer();
$kalhy->manger("Croquettes"); // Sortie : "Kalhy mange Croquettes"

echo "<p>" . ( $kalhy instanceof Chien ? "OUI" : "NON" ) . "</p>";
echo "<p>" . ( "Bonjour" instanceof Chien ? "OUI" : "NON" ) . "</p>";
