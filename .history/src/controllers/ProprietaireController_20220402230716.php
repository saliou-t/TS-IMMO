<?php
// session_start();

error_reporting(-1);
ini_set("display_errors", 1);

class ProprietaireController {
    
    public function findAll(){
        require './bootstrap.php';

        $liste[]
       
        $_SESSION['liste'] = $liste;
        require('src/views/proprietaire/index.html.php');
    }
    
    public function add(){

    }
}