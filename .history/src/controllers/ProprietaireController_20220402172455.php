<?php
session_start();

error_reporting(-1);
ini_set("display_errors", 1);

class ProprietaireController {
    
    public function findAll(){
        require './bootstrap.php';

        $liste = array (unserialize($liste));
        // $liste=implode("|",$liste);
        // var_dump($liste);
        foreach ($liste as $key => $value) {
            echo $value;
        }
        // include("../src/views/proprietaire/index.html.php?liste=$liste");
    }
    
    public function add(){

    }
}