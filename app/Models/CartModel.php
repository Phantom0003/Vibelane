<?php

class CartModel
{
    public function __construct()
    {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
    }

    public function getAll()
    {
        return $_SESSION['cart'];
    }

    public function add($productId, $quantity)
    {
        $_SESSION['cart'][$productId] = ($_SESSION['cart'][$productId] ?? 0) + $quantity;
    }

    public function update($productId, $quantity)
    {
        if (!isset($_SESSION['cart'][$productId])) {
            return;
        }
        if ($quantity <= 0) {
            unset($_SESSION['cart'][$productId]);
        } else {
            $_SESSION['cart'][$productId] = $quantity;
        }
    }

    public function remove($productId)
    {
        unset($_SESSION['cart'][$productId]);
    }

    public function clear()
    {
        $_SESSION['cart'] = [];
    }
}