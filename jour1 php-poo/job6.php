<?php
class Personnage {
    public $x;
    public $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function gauche() {
        $this->x--;
    }

    public function droite() {
        $this->x++;
    }

    public function bas() {
        $this->y++;
    }

    public function haut() {
        $this->y--;
    }

    public function position() {
        return "Position du personnage : (" . $this->x . ", " . $this->y . ")\n";
    }
}

$personnage = new Personnage(0, 0);
echo $personnage->position();
$personnage->droite();
$personnage->bas();
echo $personnage->position();
?>