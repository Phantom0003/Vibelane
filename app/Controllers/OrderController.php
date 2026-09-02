<?php 

require_once __DIR__ . '/../Model/OrderModel.php';

class OrderController {
    private $orderModel;

    public function __construct() {
        $this->orderModel = new OrderModel();
    } 

    public function getRecentOrderItems($userId, $limit = 5) {
        return $this->orderModel->getRecentOrederItems($userId, $limit);
    }
}