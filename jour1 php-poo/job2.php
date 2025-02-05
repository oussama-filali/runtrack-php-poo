<?php
class Operation {
    public $nombre1;
    public $nombre2;

    public function __construct($nombre1 = 0, $nombre2 = 0) {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }

    public function addition() {
        return $this->nombre1 + $this->nombre2;
    }
}

$operation = new Operation(5, 10);
echo "Résultat de l'addition: " . $operation->addition() . "\n";
?>