<?php
require_once "models/UserModel.php";
class AuthController{
    private $userModel;
    public function __construct(){
        $this->userModel = new UserModel();
    }
    public function login(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $userId = $_POST["user_id"];
            $password = $_POST["password"];
            $user = $this->userModel->getUserById($userId);
            if ($user) {
                if ($password == $user["password"]) {
                    session_start();
                    $_SESSION["user_id"] = $user["user_id"];
                    $_SESSION["name"] = $user["name"];
                    $_SESSION["role"] = $user["role"];
                    echo "<h2>Login Successful</h2>";
                    echo "Welcome " . $user["name"];
                    echo "<br>Role : " . $user["role"];
                } else {
                    echo "<h3 style='color:red;'>Invalid Password</h3>";
                    require "auth/login.php";
                }
            }else{
                echo "<h3 style='color:red;'>User ID Not Found</h3>";
                require "auth/login.php";
            }
        }else{
            require "auth/login.php";
        }
    }
}