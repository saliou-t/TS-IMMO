<?php
error_reporting(-1);
ini_set("display_errors", 1);

class ProprietaireController {
    
    public function findAll(){
        require './bootstrap.php';

        var_dump($liste);

        include('/home/zall/Bureau/SIMPLON/TS-Immo/Module-Proprietes/MVC-Doctrine/src/views/proprietaire/index.html.php?');
    }
    
    public function add(){

    }
}