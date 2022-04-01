<?php

class ProprietaireController {
    public function findAll(){
        echo "ici, la fonction findAll()";
    }

    public function add(){
        require_once "bootstrap.php";
        require "../entities/Proprietaire.php";
        
        $newProductName = "";
        
        $pro = new Proprietaire();
        // $product->setName($newProductName);
        
        // $entityManager->persist($product);
        // $entityManager->flush();
        
        // echo "Created Product with ID " . $product->getId() . "\n";

    }
}