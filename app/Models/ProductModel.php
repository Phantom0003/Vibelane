<?php

require_once __DIR__ . '/../../Config/DBConnection.php';
class ProductModel extends DBCOnnection
{
    public function getAllProducts()
    {
        $query = "SELECT productid, name, price, product_image, category FROM products";
        $stmt = $this->con->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($productId)
    {
        $query = "SELECT productid, name, price, product_image, category FROM products WHERE productid = :productid";
        $stmt = $this->con->prepare($query);
        $stmt->execute(['productid' => $productId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }



    public function getTopThreeProducts()
    {
        $query = "SELECT p.productid, p.name, p.price, p.product_image, SUM(od.quality) AS total_sold
          FROM products p
          INNER JOIN order_details od ON p.productid = od.productid
          GROUP BY p.productid, p.name, p.price, p.product_image
          ORDER BY total_sold DESC
          LIMIT 3";
        $stmt = $this->con->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCatagories()
    {
        $query = "SELECT DISTINCT category FROM products ORDER BY category";
        $stmt = $this->con->prepare($query);
        $stmt->execute();
        return $stmt->fetchall(PDO::FETCH_COLUMN);
    }

    public function searchProducts($searchTerm)
    {
        $query = "SELECT productid, name, price, product_image, category
                  FROM products
                  WHERE name LIKE :searchTerm
                  ORDER BY name";
        $stmt = $this->con->prepare($query);
        $stmt->execute(['searchTerm' => "%$searchTerm%"]);
        return $stmt->fetchall(PDO::FETCH_ASSOC);
    }
    public function getProductsByCategory($category)
    {
        $query = "SELECT productid, name, price, product_image, category
                  FROM products
                  WHERE category = :category
                  ORDER BY name";
        $stmt = $this->con->prepare($query);
        $stmt->execute(['category' => $category]);
        return $stmt->fetchall(PDO::FETCH_ASSOC);
    }
}
