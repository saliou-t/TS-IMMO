<?php
session_start();

error_reporting(-1);
ini_set("display_errors", 1);

class ProprietaireController {
    
    public function findAll(){
        require './bootstrap.php';

        // $liste = array (serialize($liste));
        // $liste=implode("|",$liste);
        // $_SESSION['liste'] = $liste;
        // var_dump($_SESSION['liste']);

        foreach ($liste as [$item,$value]) {
            echo "$"
        }

        // include("../src/views/proprietaire/index.html.php?liste=$liste");
    }
    
    public function add(){

    }
}