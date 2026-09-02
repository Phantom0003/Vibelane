<?php 

require_once __DIR__ . '/../../Config/DBConnection.php';

class AddressModel extends DBConnection {
    public function getAddressByUserId ($userId) {
        $query = "SELECT * FROM addresses WHERE user_id = :user_id";
        $stmt = $this->con->prepare($query);
        $stmt->bindparam(':user_id', $userId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Add a new address for a user
    public function addAddress($userId, $fullName, $phone, $addressLine, $city, $state, $postalCode) {
        $query = "INSERT INTO addresses (user_id, full_name, phone, address_line, city, state, postal_code)
                  VALUES (:user_id, :full_name, :phone, :address_line, :city, :state, :postal_code)
                  ON DUPLICATE KEY UPDATE
                    full_name = VALUES(full_name),
                    phone = VALUES(phone),
                    address_line = VALUES(address_line),
                    city = VALUES(city),
                    state = VALUES(state),
                    postal_code = VALUES(postal_code)";
        $stmt = $this->con->prepare($query);
        $stmt->bindparam(':user_id', $userId, PDO::PARAM_INT);
        $stmt->bindparam(':full_name', $fullName, PDO::PARAM_STR);
        $stmt->bindparam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindparam(':address_line', $addressLine, PDO::PARAM_STR);
        $stmt->bindparam(':city', $city, PDO::PARAM_STR);
        $stmt->bindparam(':state', $state, PDO::PARAM_STR);
        $stmt->bindparam(':postal_code', $postalCode, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
?>