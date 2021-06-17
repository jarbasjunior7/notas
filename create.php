<?php
$servername = "localhost";
$username   = "username";
$password   = "";
$dbname     = "notas";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf-8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>