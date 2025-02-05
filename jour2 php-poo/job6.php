<?php
class Commande {
    private $numeroCommande;
    private $platsCommandes;
    private $statut;

    public function __construct($numeroCommande) {
        $this->numeroCommande = $numeroCommande;
        $this->platsCommandes = [];
        $this->statut = "en cours";
    }

    // Méthode pour ajouter un plat
    public function ajouterPlat($nom, $prix) {
        $this->platsCommandes[] = ["nom" => $nom, "prix" => $prix];
    }

    // Méthode pour annuler une commande
    public function annulerCommande() {
        $this->statut = "annulée";
        echo "La commande a été annulée.\n";
    }

    // Méthode privée pour calculer le total
    private function calculerTotal() {
        $total = 0;
        foreach ($this->platsCommandes as $plat) {
            $total += $plat["prix"];
        }
        return $total;
    }

    // Méthode pour afficher les informations de la commande
    public function afficherCommande() {
        echo "Numéro de commande : " . $this->numeroCommande . "\n";
        echo "Plats commandés :\n";
        foreach ($this->platsCommandes as $plat) {
            echo "- " . $plat["nom"] . " : " . $plat["prix"] . " €\n";
        }
        echo "Total : " . $this->calculerTotal() . " €\n";
        echo "Statut : " . $this->statut . "\n";
    }
}

$commande = new Commande(123);
$commande->ajouterPlat("Pizza", 12);
$commande->ajouterPlat("Salade", 8);
$commande->afficherCommande();
$commande->annulerCommande();
?>