<?php 
class Student {
    private $nom;
    private $prenom;
    private $numeroEtudiant;
    private $credits;
    private $level;

    public function __construct($nom, $prenom, $numeroEtudiant) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numeroEtudiant = $numeroEtudiant;
        $this->credits = 0;
        $this->level = $this->studentEval();
    }

    // Méthode pour ajouter des crédits
    public function add_credits($credits) {
        if ($credits > 0) {
            $this->credits += $credits;
            $this->level = $this->studentEval();
        } else {
            echo "Erreur : Le nombre de crédits doit être positif.\n";
        }
    }

    // Méthode privée pour évaluer le niveau
    private function studentEval() {
        if ($this->credits >= 90) {
            return "Excellent";
        } elseif ($this->credits >= 80) {
            return "Très bien";
        } elseif ($this->credits >= 70) {
            return "Bien";
        } elseif ($this->credits >= 60) {
            return "Passable";
        } else {
            return "Insuffisant";
        }
    }

    // Méthode pour afficher les informations de l'étudiant
    public function studentInfo() {
        return "Nom : " . $this->nom . "\nPrénom : " . $this->prenom . "\nNuméro étudiant : " . $this->numeroEtudiant . "\nNiveau : " . $this->level . "\n";
    }
}

$etudiant = new Student("Doe", "John", 145);
$etudiant->add_credits(30);
$etudiant->add_credits(40);
$etudiant->add_credits(20);
echo $etudiant->studentInfo();
?>