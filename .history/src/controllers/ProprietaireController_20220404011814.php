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
    
    public function add(){
        require('bootstrap.php');

        // $proprietaire = new Proprietaire();
        // $proprietaire->setNom("KONTÉ");
        // $proprietaire->setPrenom("Moustapha");
        // $proprietaire->setAdresse("HLM, Sodida Rue 79 x Apix");
        // $proprietaire->setTelephone("77 091 11 11");
        // $proprietaire->setCNI("1 722 1992 1230");
        // $proprietaire->setEmail("konteyM022@gmail.com");
    
        // $entityManager->persist($proprietaire);
        // $entityManager->flush();
    }
    
    public function delete(){
        
    }

    public function save(){
        echo 'save function';
    }
}