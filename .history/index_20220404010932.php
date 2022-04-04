<?php
error_reporting(-1);
ini_set("display_errors", 1);

require_once "config/autoload.php";
require "src/controllers/ProprietaireController.php";
// use src\controller\RoleController;

$Contro = new ProprietaireController();
$Contro->findAll();

if ($_GET['page'] == 'new') {
    require_once('src/views/proprietaire/new.html.php');
}
else if ($_GET['page'] == 'save') {
    $proprietaire = new Product();
    $proprietaire->setName($newProductName);

    $entityManager->persist($proprietaire);
    $entityManager->flush();
} 