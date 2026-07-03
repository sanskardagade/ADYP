<?php

// ==========================================
// Staff Task Management System
// Front Controller (Entry Point)
// ==========================================

// Load Project Configuration
require_once "config/config.php";

// Load Database Class
require_once "config/database.php";

// Load Authentication Controller
require_once "controllers/AuthController.php";

// Create Database Object
$db = new Database();

// Connect to Database
$conn = $db->connect();

// Stop execution if database connection fails
if (!$conn) {
    die("Database Connection Failed!");
}

// Create Authentication Controller Object
$authController = new AuthController();

// Handle Login Request / Display Login Page
$authController->login();

?>