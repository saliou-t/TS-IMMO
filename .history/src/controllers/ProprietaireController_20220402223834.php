<?php
session_start();

error_reporting(-1);
ini_set("display_errors", 1);

class ProprietaireController {
    
    public function findAll(){
        require './bootstrap.php';

        // $liste = array (serialize($liste));
        // $liste=implode("|",$liste);
        echo $liste[0]->getPrenom();
        $_SESSION['liste'] = $liste;
        // var_dump($_SESSION['liste'][0]->id);

        // foreach ($liste as [$item,$value]) {
        //     echo "$item";
        // }
proprietaire/index.html.php
    }
    
    public function add(){

    }
}