<?php
//Creation de la classe voiture
    class Voiture {

        public $marque;
        public $modele;
        public $kilometrage;
        public $annee;
        public $couleur;

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
        }

    }







?>