<?php

require_once __DIR__ . '/../../../Models/CartModel.php';
require_once __DIR__ . '/../../../Models/ProductModel.php';

class CartController
{
    private $cartModel;
    private $productModel;

    public function __construct()
    {
        $this->cartModel = new CartModel();
        $this->productModel = new ProductModel();
    }

    public function addToCart($productId, $quantity)
    {
        // Validate product ID and quantity
        if (!is_numeric($productId) || !is_numeric($quantity) || $quantity <= 0) {
            throw new InvalidArgumentException("Invalid product ID or quantity.");
        }

        // Check if the product exists
        $product = $this->productModel->getProductById($productId);
        if (!$product) {
            throw new InvalidArgumentException("Product not found.");
        }

        // Add to cart
        $this->cartModel->add($productId, $quantity);
    }
}
