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


    public function getCatagories() {
        return $this->productModel->getCatagories();
    }

    public function searchProducts($searchTerm) {
        return $this->productModel->searchProducts($searchTerm);
    }
    public function getProductsByCategory($category) {
        return $this->productModel->getProductsByCategory($category);
    }
}