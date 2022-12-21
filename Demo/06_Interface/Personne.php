<?php
// permet de rendre une classe non instanciable
// Une classe abstraite peut contenir aucune fonction abstraite
// Une classe qui possède une fonction abstraite devient obligatoirement
// abstraite
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

    // Permet de forcer la redéfinition de méthode
    // = Obligation de redéfinir dans la classe enfant 
    // la plus proche
    abstract public function rire ();

    // Permet de bloquer la redéfinition de méthode
    // = impossible de redéfinir dans les enfants
    final public function sePresenter () {
        echo "<p>$this->prenom $this->nom</p>";
    }

}

?>