<?php

require '/home/zall/Bureau/SIMPLON/TS-Immo/Module-Proprietes/MVC-Doctrine/bootstrap.php';

class ProprietaireController {
    public function findAll(){
        echo "ici, la fonction findAll()";
    }
    
    public function add(){
    //    echo "ok";
        // require_once "bootstrap.php";
        require "src/entities/Proprietaire.php";
                
        $proprietaire = new Proprietaire();

        $proprietaire->setNom = "TALLA";

        $repo = $entityManager->getRepository('Proprietaire');

        dd($repo);
        
        // $liste = $repo->findAll();

        // foreach ($liste as $item) {
        //     echo sprintf("-%s\n", $item->getNom());
        // }
        // // $product->setName($newProductName);
        
        // // $entityManager->persist($product);
        // // $entityManager->flush();
        
        // // echo "Created Product with ID " . $product->getId() . "\n";

    }
}