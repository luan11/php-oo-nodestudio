<?php

require_once 'vendor/autoload.php';

$product = new \App\Model\Product();
$product->setId(1);
$product->setName('Red Dead Redemption 2');
$product->setDescription('Jogo da rockstar para PC/PS4/XONE');

$productDao = new \App\Model\ProductDao();
// $productDao->create($product);
// $productDao->update($product);
// $productDao->delete(2);
var_dump($productDao->read());