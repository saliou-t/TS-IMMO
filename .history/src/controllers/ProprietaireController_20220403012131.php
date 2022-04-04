<?php
@session_start();

error_reporting(-1);
ini_set("display_errors", 1);

class ProprietaireController {
    
    public function findAll(){
        require './bootstrap.php';
       
        $_SESSION['liste'] = $liste;
        require_once('src/views/proprietaire/index.html.php');
    }
    
    public function add($request){


        $proprietaire = new Proprietaire();
        $proprietaire->setPrenom($request->prenom);
        $proprietaire->setNom($request->nom);
        $proprietaire->setAdresse($request->adresse);
        $proprietaire->setTelephone($request->telephone);
        $proprietaire->setCNI($request->cni);
        $proprietaire->setEmail($request->email);

        $entityManager->persist($proprietaire);
        $entityManager->flush();
        require_once ('src/views/proprietaire/new.html.php');
    }

    public function delete(){
        
    }
}