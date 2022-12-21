<?php

class Demo
{

    // public : Accessible partout (dans la classe et en dehors)
    // protected : Accessible uniquement dans la classe et ses enfants (héritage)
    // private : Accessible uniquement dans la classe


    // Properties
    public string $nom; // nom est accessible partout
    protected int $age; // age est accessible dans Demo et ses classes enfants
    private bool $active; // $active n'est accessible que dans Demo

    // Methods
    // Par défaut, vos fonctions sont publiques
    public function set_name($n) {
        $this->nom = $n;
    }

    protected function set_age($a) {
        $this->age = $a;
    }
   
    private function set_active($a) {
        $this->active = $a;
    }
}

$demo = new Demo();
$demo->nom = "Ma démo"; // OK
// $demo->age = 12; // ERROR
// $demo->active = true; // ERROR

$demo->set_name("Ma nouvelle démo");
echo $demo->nom;
// $demo->set_age(12);
// $demo->set_active(false);