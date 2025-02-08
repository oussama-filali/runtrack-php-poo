<?php
require_once "Personne.php";

class Professeur extends Personne {
    private $matiereEnseignee;

    public function __construct($age, $matiere) {
        parent::__construct($age);
        $this->matiereEnseignee = $matiere;
    }

    public function enseigner() {
        echo "Le cours de " . $this->matiereEnseignee . " va commencer.<br>";
    }
}
?>
