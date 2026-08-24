<?php

require_once __DIR__ . '/../Models/ProductModel.php';
class ProductController
{
    private $productModel;

    public function __construct() {
        $this->productModel = new ProductModel();

    }

    public function getAllProducts() {

        return $this->productModel->getAllProducts();

    }

    public function getProductById($productId) {
        return $this->productModel->getProductById($productId);
    }

    public function getTopThreeProducts() {
        return $this->productModel->getTopThreeProducts();
    }
}