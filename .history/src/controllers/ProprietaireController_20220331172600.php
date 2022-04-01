<?php


class ProprietaireController {
    public function findAll(){
        echo "ici, la fonction findAll()";
    }
    
    public function add(){
       echo "ok";
        // require_once "bootstrap.php";
        require "src/entities/Proprietaire.php";
        
        // $newProductName = "";
        
        $proprietaire = new Proprietaire();
        die($proprietaire);

        // // $product->setName($newProductName);
        
        // // $entityManager->persist($product);
        // // $entityManager->flush();
        
        // // echo "Created Product with ID " . $product->getId() . "\n";

    }
}