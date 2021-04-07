<?php
include "Models/product.php";
include  "Services/ProductManager.php";
use Services\ProductManager;
use  Models\Product;
$productManager = new ProductManager();
$productManager->add(new Product("Laptop",2));
$productManager->add(new Product("Mobile",2));

$products = $productManager->getProducts();
foreach ($products as $product) {
    echo "tên sản phẩm là :".$product->getName() ."<br/>";
    echo "giá là :".$product->getPrice()."<br/>";
}