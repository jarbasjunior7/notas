<?php
//Página de cadastro
//$servername = "localhost";
//$username   = "root";
//$password   = "";
//$dbname     = "notas";

$servername = "ftpupload.net";
$username   = "	epiz_28918882";
$password   = "6xwKZrxRtyfT15";
$dbname     = "	epiz_28918882_XXX";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf-8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>