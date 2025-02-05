<?php
class Produit {
    private $nom;
    private $prixHT;
    private $TVA;

    public function __construct($nom, $prixHT, $TVA) {
        $this->nom = $nom;
        $this->prixHT = $prixHT;
        $this->TVA = $TVA;
    }

    public function CalculerPrixTTC() {
        return $this->prixHT * (1 + $this->TVA / 100);
    }

    public function afficher() {
        return "Nom du produit : " . $this->nom . "\nPrix HT : " . $this->prixHT . " €\nTVA : " . $this->TVA . "%\nPrix TTC : " . $this->CalculerPrixTTC() . " €\n";
    }

    public function setNom($nouveauNom) {
        $this->nom = $nouveauNom;
    }

    public function setPrixHT($nouveauPrixHT) {
        $this->prixHT = $nouveauPrixHT;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrixHT() {
        return $this->prixHT;
    }

    public function getTVA() {
        return $this->TVA;
    }
}

$produit1 = new Produit("Laptop", 800, 20);
$produit2 = new Produit("Smartphone", 400, 20);

echo $produit1->afficher();
echo $produit2->afficher();

$produit1->setNom("Ordinateur Portable");
$produit1->setPrixHT(850);

echo $produit1->afficher();
?>