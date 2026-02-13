<?php

namespace app\models;

use Flight;
use PDO;

class ObjectExchange
{
    private $db;
    private $name;
    private $table = "object_exchange";

    public function __construct()
    {
        $this->db = Flight::db();
    }

}
