<?php
//Página de cadastro
//$servername = "localhost";
//$username   = "root";
//$password   = "";
//$dbname     = "notas";

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "notas";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf-8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO users (aluno, disciplina, nota1, nota2)
  VALUES ('Jarbas', 'ADS', '8','9')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>