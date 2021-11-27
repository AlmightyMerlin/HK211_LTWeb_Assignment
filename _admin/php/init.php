<?php
require_once 'php/functions.php';
	
// Always display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start session
session_start();

// Connect database
$serverName = 'localhost';
$userName   = 'root';
$port = 3306;
$password   = '';
$dbName     = 'web_assignment';

$db         = new PDO("mysql:host=$serverName;port=$port;dbname=$dbName", $userName, $password);

// Detect login
$currentUser = null;
if (isset($_SESSION['userId'])) {
    $currentUser = findUserByUsername($_SESSION['userId']);
}