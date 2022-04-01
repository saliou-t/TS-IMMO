<?php

class ProprietaireController {
    public function findAll(){
        echo "ici, la fonction findAll()";
    }

    public function add(){
        require_once "bootstrap.php";
        require "../entities/Proprietaire.php";
        
        $newProductName = "";
        
        $product = new Pri();
        $product->setName($newProductName);
        
        $entityManager->persist($product);
        $entityManager->flush();
        
        echo "Created Product with ID " . $product->getId() . "\n";

    }
}