<?php 
class Voiture {
    private $marque;
    private $modele;
    private $annee;
    private $kilometrage;
    private $en_marche;
    private $reservoir;

    public function __construct($marque, $modele, $annee, $kilometrage) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->kilometrage = $kilometrage;
        $this->en_marche = false;
        $this->reservoir = 50;
    }

    // Méthode privée pour vérifier le niveau du réservoir
    private function verifier_plein() {
        return $this->reservoir;
    }

    // Méthode pour démarrer la voiture
    public function demarrer() {
        if ($this->verifier_plein() > 5) {
            $this->en_marche = true;
            echo "La voiture démarre.\n";
        } else {
            echo "Le réservoir est trop bas pour démarrer.\n";
        }
    }

    // Méthode pour arrêter la voiture
    public function arreter() {
        $this->en_marche = false;
        echo "La voiture s'arrête.\n";
    }
}

$voiture = new Voiture("Toyota", "Corolla", 2020, 15000);
$voiture->demarrer();
$voiture->arreter();
?>