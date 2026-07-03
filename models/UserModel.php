<?php
require_once "config/database.php";

class UserModel{
    private $conn;
    public function __construct(){
        $database = new Database();
        $this->conn = $database->connect();
    }
    public function getUserById($userId){
            $sql = "SELECT * FROM users WHERE user_id = :user_id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":user_id", $userId, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

