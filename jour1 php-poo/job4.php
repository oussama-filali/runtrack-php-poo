<?php 
class Point {
    public $x;
    public $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function afficherLesPoints() {
        return "Coordonnées du point : (" . $this->x . ", " . $this->y . ")\n";
    }

    public function afficherX() {
        return "Coordonnée X : " . $this->x . "\n";
    }

    public function afficherY() {
        return "Coordonnée Y : " . $this->y . "\n";
    }

    public function changerX($nouveauX) {
        $this->x = $nouveauX;
    }

    public function changerY($nouveauY) {
        $this->y = $nouveauY;
    }
}

$point = new Point(3, 4);
echo $point->afficherLesPoints();
$point->changerX(5);
$point->changerY(6);
echo $point->afficherLesPoints();
?>