<?php 

require_once __DIR__ . '/../../Config/DBConnection.php';
class ProductModel extends DBCOnnection
{
    public function getAllProducts()
    {
        $query = "SELECT name,price,product_image,category FROM products";
        $stmt = $this->con->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($productId)
    {
        $query = "SELECT name, price, product_image, category FROM products WHERE productid = :productid";
        $stmt = $this->con->prepare($query);
        $stmt->execute(['productid' => $productId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    

    public function getTopThreeProducts() {
        $query = "SELECT p.name, p.price, p.product_image, SUM(od.quality) AS total_sold
              FROM products p
              INNER JOIN order_details od ON p.productid = od.productid
              GROUP BY p.productid, p.name, p.price, p.product_image
              ORDER BY total_sold DESC
              LIMIT 3";
        $stmt = $this->con->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
