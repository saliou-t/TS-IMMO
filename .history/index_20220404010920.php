<?php
error_reporting(-1);
ini_set("display_errors", 1);

require_once "config/autoload.php";
require "src/controllers/ProprietaireController.php";
// use src\controller\RoleController;

$proprietaire = new ProprietaireController();
$proprietaire->findAll();

if ($_GET['page'] == 'new') {
    require_once('src/views/proprietaire/new.html.php');
}
else if ($_GET['page'] == 'save') {
    $prop = new Product();
    $prop->setName($newProductName);

    $entityManager->persist($prop);
    $entityManager->flush();
} 