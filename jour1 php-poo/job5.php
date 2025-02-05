<?php 
class Animal {
    public $age;
    public $prenom;

    public function __construct() {
        $this->age = 0;
        $this->prenom = "";
    }

    public function vieillir() {
        $this->age++;
    }

    public function nommer($nom) {
        $this->prenom = $nom;
    }
}

$animal = new Animal();
echo "Âge initial de l'animal : " . $animal->age . "\n";
$animal->vieillir();
echo "Âge après vieillissement : " . $animal->age . "\n";
$animal->nommer("Rex");
echo "Nom de l'animal : " . $animal->prenom . "\n";



?>