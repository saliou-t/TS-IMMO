<?php
session_start();

error_reporting(-1);
ini_set("display_errors", 1);

class ProprietaireController {
    
    public function findAll(){
        require './bootstrap.php';

        $liste = array (serialize($liste));
        // var_dump($liste[0]);


        header('Location: ../src/views/proprietaire/index.html.php');
    }
    
    public function add(){

    }
}