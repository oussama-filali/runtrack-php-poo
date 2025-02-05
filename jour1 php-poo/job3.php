<?php
class Personne {
    public $nom;
    public $prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function SePresenter() {
        return "Je m'appelle " . $this->prenom . " " . $this->nom . ".\n";
    }
}

$personne1 = new Personne("Dupont", "Jean");
$personne2 = new Personne("Martin", "Marie");

echo $personne1->SePresenter();
echo $personne2->SePresenter();
?>