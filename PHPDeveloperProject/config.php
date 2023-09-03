<?php
$host = 'localhost';
$username = 'phpprojecttest';
$password = 'phptest123';
$database_name = 'phpproject';

//Login to the database with PHP Data Objects

try {
    $db = new PDO("mysql:host=$host;dbname=$database_name", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}