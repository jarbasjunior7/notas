<?php
//Página de cadastro
//$servername = "localhost";
//$username   = "root";
//$password   = "";
//$dbname     = "notas";

define('HOST','	sql307.epizy.com');
define('DB','epiz_28918882_XXX');
define('USER','epiz_28918882');
define('PASS','6xwKZrxRtyfT15');

try {
  $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>