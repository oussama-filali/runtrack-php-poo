<?php
require_once "Eleve.php";
require_once "Professeur.php";

// Création d'un élève
$eleve = new Eleve();
$eleve->bonjour();
$eleve->allerEnCours();
$eleve->afficherAge();
$eleve->modifierAge(15);
$eleve->afficherAge();

// Création d'un professeur
$prof = new Professeur(40, "Mathématiques");
$prof->bonjour();
$prof->enseigner();
?>
