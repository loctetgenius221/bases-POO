<?php
require_once 'inclusion/interface.php';
    require_once 'classes/classVoiture.php';
    require_once 'classes/classMoto.php';


    // Création de l'objet voiture1 qui est une instance de Voiture
    $voiture1= new Voiture("JEEP", "tucson", "500km/h", "2008", "bleu");
    
    // Appel à la méthode afficherDétails.
    $voiture1->afficherDetails();
    
    //Appel à la méthode klaxon du voiture
    $voiture1->klaxonner();

     $voiture1->setAnnee("2019");
     echo $voiture1->getAnnee();

    //appel de la methode reparer
    $voiture1->reparer();


    // Création de l'objet moto électique qui est une instance de moto
    $motoElectrique = new Moto("Tesla", "Model E", "250 km");