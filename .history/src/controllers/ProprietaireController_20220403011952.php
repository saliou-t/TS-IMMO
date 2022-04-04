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
        $user->setPrenom($request->prenom);
        $user->setPrenom($request->prenom);
        $user->setPrenom($request->prenom);
        $user->setPrenom($request->prenom);

        $entityManager->persist($user);
        $entityManager->flush();
        require_once ('src/views/proprietaire/new.html.php');
    }

    public function delete(){
        
    }
}