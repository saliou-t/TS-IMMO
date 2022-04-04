<?php

error_reporting(-1);
ini_set("display_errors", 1);

require_once "config/autoload.php";
require_once "bootstrap.php";
require "src/controllers/ProprietaireController.php";
// use src\controller\RoleController;

$proprietaireController = new ProprietaireController();
$proprietaireController->findAll();

if ($_GET['page'] == 'new') {
    require_once('src/views/proprietaire/new.html.php');
}
else if ($_GET['page'] == 'save') {
    $proprietaireController->add();
} 