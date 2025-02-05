<?php   
class Livre {
    private $titre;
    private $auteur;
    private $nombrePages;
    private $disponible;

    public function __construct($titre, $auteur, $nombrePages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->setNombrePages($nombrePages);
        $this->disponible = true;
    }

    // Méthode pour vérifier la disponibilité
    public function verification() {
        return $this->disponible;
    }

    // Méthode pour emprunter un livre
    public function emprunter() {
        if ($this->verification()) {
            $this->disponible = false;
            echo "Le livre a été emprunté.\n";
        } else {
            echo "Le livre n'est pas disponible.\n";
        }
    }

    // Méthode pour rendre un livre
    public function rendre() {
        if (!$this->verification()) {
            $this->disponible = true;
            echo "Le livre a été rendu.\n";
        } else {
            echo "Le livre n'a pas été emprunté.\n";
        }
    }
}

$livre = new Livre("1984", "George Orwell", 328);
$livre->emprunter();
$livre->rendre();
?>