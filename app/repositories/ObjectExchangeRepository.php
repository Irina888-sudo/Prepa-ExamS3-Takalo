<?php

class ObjectExchangeRepository {
    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function findAllObj(): array {
        $sql = "SELECT * FROM object_exchange";
                
        $stmt = $this->db->query($sql);  
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'ObjectExchange');
    }
}



?>