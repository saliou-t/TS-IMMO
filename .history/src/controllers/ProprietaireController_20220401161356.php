<?php
session_start();

error_reporting(-1);
ini_set("display_errors", 1);

class ProprietaireController {
    
    public function findAll(){
        require './bootstrap.php';

        var_dump($liste);
        $_SESSION['list'] = $liste;

        header('Location: http://www.example.com/');
    }
    
    public function add(){

    }
}