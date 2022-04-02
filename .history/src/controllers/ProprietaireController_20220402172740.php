<?php
session_start();

error_reporting(-1);
ini_set("display_errors", 1);

class ProprietaireController {
    
    public function findAll(){
        require './bootstrap.php';

        $liste=implode("|",$liste);
        $liste = array (serialize($liste));
        $_SESSION['liste'] = $liste;
        var_dump($_SESSION['liste'][]);

        // include("../src/views/proprietaire/index.html.php?liste=$liste");
    }
    
    public function add(){

    }
}