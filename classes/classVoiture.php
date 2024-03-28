<?php

require_once 'inclusion/interface.php';
require_once 'classVehicule.php';

//Creation de la classe voiture
class Voiture extends Vehicule implements IReparable{
        
    //
    private $marque;
    private $modele;
    private $kilometrage;
    private $annee;
    private $couleur;



    // Méthode getMarque pour afficher la marque.
    public function getMarque() {
        return $this->marque;
    }
     //Methode setMarque pour acceder et modifier la marque.
    public function setMarque($nouveau_marque){
        $this->marque = $nouveau_marque;
    }

    // Méthode getModele pour afficher le modèle.
    public function getModele() {
        return $this->modele;
    }
    //Methode setMarque pour acceder et modifier le modele.
    public function setModele($nouveau_modele){
        $this->modele = $nouveau_modele;
    }

    // Méthode getKilometrage pour afficher le kilometrage.
    public function getkilometrage() {
        return $this->kilometrage;
    }
    //Methode setKilometrage pour acceder et modifier le kilometrage.
    public function setkilometrage($nouveau_kilometrage){
        $this->kilometrage = $nouveau_kilometrage;
    }

    // Méthode getAnne pour afficher la annee.
    public function getAnnee() {
        return $this->annee;
    }
    
    // Methode setAnnee pour acceder et modifier l'Annee.
    public function setAnnee($nouveau_annee){
        $this->annee = $nouveau_annee;
    }

    // Méthode getCouleur pour afficher la couleur.
    public function getCouleur() {
        return $this->couleur;
    }
    // Methode SetCouleur pour acceder et modifier la Couleur.
    public function setCouleur($nouvelle_couleur){
        $this->couleur = $nouvelle_couleur;
    }
    
    //Appel de la Fonction __CONSTRUCT pour pouvoir initialiser 
    public function __construct($marque, $modele, $kilometrage, $annee,$couleur){
        
        $this->marque = $marque;
        $this->modele = $modele;
        $this->kilometrage = $kilometrage;
        $this->annee = $annee;
        $this->couleur = $couleur;
    }

    // Méthode klaxonner
    public function klaxonner(){

        var_dump("Klaxon Pinn! Pinn! Pinn!");
    }

    // Méthode qui affiche les détails de la voiture
    public function afficherDetails(){
        echo "La marque est: $this->marque";
        echo "<br>";
        echo "Le modele est: $this->modele";
        echo "<br>";
        echo "Le kilometrage est: $this->kilometrage";
        echo "<br>";
        echo "L'année est: $this->annee";
        echo "<br>";
        echo "La couleur est: $this->couleur";
        echo "<br>";
    }

    // Méthode pour reparer la voiture

    public function reparer() {

        echo "La voiture est en cours de réparation.\n";
    }

}



  
  








































