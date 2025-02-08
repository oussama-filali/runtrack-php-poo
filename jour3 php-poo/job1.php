<?php
class Personne {
    protected $age;

    public function __construct($age = 14) {
        $this->age = $age;
    }

    public function afficherAge() {
        echo "J'ai " . $this->age . " ans.<br>";
    }

    public function bonjour() {
        echo "Hello !<br>";
    }

    public function modifierAge($nouvelAge) {
        $this->age = $nouvelAge;
    }
}
?>
