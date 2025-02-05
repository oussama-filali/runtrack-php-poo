<?php
class Operation {
    public $nombre1;
    public $nombre2;

    public function __construct($nombre1 = 0, $nombre2 = 0) {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }
}

$operation = new Operation(5, 10);
echo "Nombre 1: " . $operation->nombre1 . "\n";
echo "Nombre 2: " . $operation->nombre2 . "\n";
?>