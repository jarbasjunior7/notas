<?php
//Página de cadastro
//$servername = "localhost";
//$username   = "root";
//$password   = "";
//$dbname     = "notas";

define('HOST','localhost');
define('DB','notas');
define('USER','root');
define('PASS','');

try{
  $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) 
{
  echo "Connection failed: " . $e->getMessage();
}
?>