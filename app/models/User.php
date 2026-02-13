<?php

namespace app\models;

use Flight;
use PDO;

class User
{
    private $db;
    private $name;
    private $table = "user";
    public function __construct()
    {
        $this->db = Flight::db();
    }

}