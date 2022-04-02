<?php
error_reporting(-1);
ini_set("display_errors", 1);

class ProprietaireController {
    
    public function findAll(){
        require './bootstrap.php';

        var_dump($liste);

        include('../view.');
    }
    
    public function add(){

    }
}