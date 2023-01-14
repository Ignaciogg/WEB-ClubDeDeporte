<?php
$server = "localhost";
$user = "root";
$pass = "toor";
$database = "web";

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $user, $pass);
  } catch (PDOException $e) {
    die('Connection Failed: ' . $e->getMessage());
  }

?>