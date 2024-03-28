<?php


// Définition de la classe Vehicule
    class Vehicule {

        public function demarrer() {
            echo "Le véhicule démarre.\n";
        }
    }
    
    

//Creation de la classe voiture
    class Voiture extends Vehicule{
        
        //
        public $marque;
        public $modele;
        public $kilometrage;
        public $annee;
        public $couleur;
        
        //Appel de la Fonction CONSTRUCT pour pouvoir initialiser 

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

    }
    

    // Création de l'objet voiture1 qui est une instance de Voiture
    $voiture1= new Voiture("JEEP", "tucson", "500km/h", "2008", "bleu");

    // Appel à la méthode afficherDétails.
    $voiture1->afficherDetails();
    
    //Appel à la méthode klaxon du voiture
    $voiture1->klaxonner();

?>