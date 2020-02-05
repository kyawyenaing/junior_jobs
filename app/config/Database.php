<?php
namespace App\config;

use PDOException;
use PDO;
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "job_portal";
    public $connection;

    public function getConnection() {
        $this->connection = null;
        try{
            $this->connection = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name,$this->username);
        }catch(PDOException $exception) {
            echo "Connection Error! ". $exception->getMessage();
        }
        return $this->connection;
    }
}

