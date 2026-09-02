<?php 
require_once __DIR__ . '/../../Config/DBConnection.php';
class OrderModel extends DBConnection {
    
    public function getRecentOrederItems($userId, $limit = 5) {
        $query = "SELECT p.name, p.price, p.product_image, o.orderdate, od.quality
                  FROM orders o
                  INNER JOIN order_details od ON o.orderid = od.orderid
                  INNER JOIN products p ON od.productid = p.productid
                  WHERE o.user_id = :user_id
                  ORDER BY o.orderdate DESC
                  LIMIT :limit";
        $stmt = $this->con->prepare($query);
        $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>