<?php
class Cercle {
    public $rayon;

    public function __construct($rayon) {
        $this->rayon = $rayon;
    }

    public function changerRayon($nouveauRayon) {
        $this->rayon = $nouveauRayon;
    }

    public function afficherInfos() {
        return "Rayon du cercle : " . $this->rayon . "\n";
    }

    public function circonference() {
        return 2 * pi() * $this->rayon;
    }

    public function aire() {
        return pi() * pow($this->rayon, 2);
    }

    public function diametre() {
        return 2 * $this->rayon;
    }
}

$cercle1 = new Cercle(4);
$cercle2 = new Cercle(7);

echo $cercle1->afficherInfos();
echo "Circonférence : " . $cercle1->circonference() . "\n";
echo "Diamètre : " . $cercle1->diametre() . "\n";
echo "Aire : " . $cercle1->aire() . "\n";

echo $cercle2->afficherInfos();
echo "Circonférence : " . $cercle2->circonference() . "\n";
echo "Diamètre : " . $cercle2->diametre() . "\n";
echo "Aire : " . $cercle2->aire() . "\n";




?>