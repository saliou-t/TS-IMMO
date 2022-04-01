<?php
// create_product.php <name>
require_once "../bootstrap.php";

$name = '';

$product = new Pro();
$product->setName($newProductName);

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";