<?php

require 'classes/Product.php';
require 'models/Product.php';

use \models\Product as ProductModel; // Outra forma de declarar namespaces
use \classes\Product as ProductClass;

// $product = new \models\Product(); <- Uma forma de declarar namespaces
$product = new ProductModel();
$product->showDetails();

echo "<br>";

$product2 = new ProductClass();
$product2->showDetails();