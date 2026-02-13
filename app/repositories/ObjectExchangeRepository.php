<?php

namespace app\repositories;

use Flight; 
use PDO;

class ObjectExchangeRepository {
    private PDO $db;

    public function __construct() {
        $this->db = Flight::db();
    }

    public function findAllObj(): array {
        $sql = "SELECT * FROM object_exchange";
                
        $stmt = $this->db->query($sql);  
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'ObjectExchange');
    }
}



?>