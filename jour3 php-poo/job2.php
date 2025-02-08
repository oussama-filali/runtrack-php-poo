<?php
require_once "Personne.php";

class Eleve extends Personne {
    public function allerEnCours() {
        echo "Je vais en cours.<br>";
    }

    public function afficherAge() {
        echo "J’ai " . $this->age . " ans.<br>";
    }
}
?>
