<?php


class ProprietaireController {
    public function findAll(){
        echo "ici, la fonction findAll()";
    }
    
    public function add(){
    //    echo "ok";
        // require_once "bootstrap.php";
        require "src/entities/Proprietaire.php";
        
        // $newProductName = "";
        
        $proprietaire = new Proprietaire();

        $proprietaire->setNom = "TALLA";

        $productRepository = $entityManager->getRepository('Proprietaire');
        
        $liste = $productRepository->findAll();

        foreach ($liste as $item) {
            echo sprintf("-%s\n", $itel->getName());
        }
        // // $product->setName($newProductName);
        
        // // $entityManager->persist($product);
        // // $entityManager->flush();
        
        // // echo "Created Product with ID " . $product->getId() . "\n";

    }
}