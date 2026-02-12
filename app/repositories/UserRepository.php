<?php

class UserRepository {
    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function findAllUsers(): array {
        $sql = "SELECT id_user, name, email FROM user"; 
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'User');
    }

}


?>