<?php 
class Livre {
    private $titre;
    private $auteur;
    private $nombrePages;

    public function __construct($titre, $auteur, $nombrePages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->setNombrePages($nombrePages);
    }

    // Assesseurs (getters)
    public function getTitre() {
        return $this->titre;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function getNombrePages() {
        return $this->nombrePages;
    }

    // Mutateurs (setters)
    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function setAuteur($auteur) {
        $this->auteur = $auteur;
    }

    public function setNombrePages($nombrePages) {
        if (is_int($nombrePages) && $nombrePages > 0) {
            $this->nombrePages = $nombrePages;
        } else {
            echo "Erreur : Le nombre de pages doit être un entier positif.\n";
        }
    }
}

$livre = new Livre("Le Petit Prince", "Antoine de Saint-Exupéry", 96);
echo "Titre : " . $livre->getTitre() . "\n";
echo "Auteur : " . $livre->getAuteur() . "\n";
echo "Nombre de pages : " . $livre->getNombrePages() . "\n";

$livre->setNombrePages(-10); // Affiche une erreur
$livre->setNombrePages(120);
echo "Nouveau nombre de pages : " . $livre->getNombrePages() . "\n";
?>