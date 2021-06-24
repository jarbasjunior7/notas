<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<?php

//define('HOST','localhost');
	//define('DB','notas');
	//define('USER','root');
	//define('PASS','');

define('HOST','sql307.epizy.com');
define('DB','epiz_28918882_notas');
define('USER','epiz_28918882');
define('PASS','6xwKZrxRtyfT15');

try{
  $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  //echo "Conectado com sucesso";
}catch(Exception $erro){
  echo 'Erro ao conectar';
}

 if(isset($_POST['add'])){
   $aluno = $_POST['aluno'];
   $disciplina = $_POST['disciplina'];
   $nota1 = $_POST['nota1'];
   $nota2 = $_POST['nota2'];
 
  $sql = $pdo->prepare("INSERT INTO users VALUES (null,?,?,?,?)");
  $sql->execute(array($aluno,$disciplina,$nota1,$nota2));
  
  echo "<meta HTTP-EQUIV='refresh' CONTENT='0'>";
}

?>
<body>

    <form method="post">
        <input type="text" name="aluno" placeholder="Aluno">
        <input type="text" name="disciplina" placeholder="Disciplina">
        <input type="text" name="nota1" placeholder="Nota 1">
        <input type="text" name="nota2" placeholder="Nota 2">
        <input type="submit" value="Adicionar" name="add">
    </form>

  <a href="../">Voltar</a>

</body>
</html>
