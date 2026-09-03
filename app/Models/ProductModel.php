<?php

require_once __DIR__ . '/../../Config/DBConnection.php';
class ProductModel extends DBCOnnection
{
    public function getAllProducts()
    {
        $query = $query = "SELECT p.productid, pg.name, pg.price, p.product_image, pg.category
                  FROM products p
                  JOIN product_groups pg ON p.groupid = pg.groupid
                  GROUP BY pg.groupid
                  ORDER BY pg.name";
        $stmt = $this->con->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($productId)
    {
        $query = "SELECT p.productid, p.groupid, pg.name, pg.price, p.product_image,
                         pg.category, p.size, p.color, p.stockquantity
                  FROM products p
                  JOIN product_groups pg ON p.groupid = pg.groupid
                  WHERE p.productid = :productid";
        $stmt = $this->con->prepare($query);
        $stmt->execute(['productid' => $productId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }



    public function getTopThreeProducts()
    {
        $query = "SELECT pg.name, pg.price, p.product_image, SUM(od.quality) AS total_sold
                  FROM products p
                  JOIN product_groups pg ON p.groupid = pg.groupid
                  INNER JOIN order_details od ON p.productid = od.productid
                  GROUP BY pg.groupid, pg.name, pg.price, p.product_image
                  ORDER BY total_sold DESC
                  LIMIT 3";
        $stmt = $this->con->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCatagories()
    {
        $query = "SELECT DISTINCT category FROM product_groups ORDER BY category";
        $stmt = $this->con->prepare($query);
        $stmt->execute();
        return $stmt->fetchall(PDO::FETCH_COLUMN);
    }

    public function searchProducts($searchTerm)
    {
        $query = "SELECT p.productid, pg.name, pg.price, p.product_image, pg.category
                  FROM products p
                  JOIN product_groups pg ON p.groupid = pg.groupid
                  WHERE pg.category = :category
                  GROUP BY pg.groupid
                  ORDER BY pg.name";
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

    // Other size/color variants belonging to the same product group
    public function getVariantsByGroupId($groupId)
    {
        $query = "SELECT productid, size, color, stockquantity
                  FROM products WHERE groupid = :groupid";
        $stmt = $this->con->prepare($query);
        $stmt->execute(['groupid' => $groupId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
