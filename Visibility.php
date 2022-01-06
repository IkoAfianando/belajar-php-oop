<?php

require_once "data/Product.php";

$product = new Product("Banana", 200000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;
