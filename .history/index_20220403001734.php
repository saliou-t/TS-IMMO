<?php
error_reporting(-1);
ini_set("display_errors", 1);

require_once "config/autoload.php";
require "src/controllers/ProprietaireController.php";
// use src\controller\RoleController;
var_dump($argc);

$proprietaire = new ProprietaireController();
$proprietaire->findAll();