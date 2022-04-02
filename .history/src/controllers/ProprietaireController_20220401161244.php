<?php
session_start();

error_reporting(-1);
ini_set("display_errors", 1);

class ProprietaireController {
    
    public function findAll(){
        require './bootstrap.php';

        var_dump($liste);
        $_SESSION['list'] = ;

        include('/home/zall/Bureau/SIMPLON/TS-Immo/Module-Proprietes/MVC-Doctrine/src/views/proprietaire/index.html.php?list='.$liste);
    }
    
    public function add(){

    }
}