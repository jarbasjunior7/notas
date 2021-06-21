<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<?php 

define('HOST','	sql307.epizy.com');
define('DB','epiz_28918882_teste');
define('USER','epiz_28918882');
define('PASS','6xwKZrxRtyfT15');

	try{
		$pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//echo "Conectado com sucesso";
	}catch(Exception $erro){
		echo 'Erro ao conectar';
	}

?>

<body>

    <?php 

    $id = $_GET['id'];

    $sql = $pdo->prepare("SELECT * FROM users WHERE id=$id");
    $sql->execute();
    $info = $sql->fetchAll();

    foreach ($info as $key => $value) { 

    if(isset($_POST['salvar'])){
      $aluno = $_POST['aluno'];
      $disciplina = $_POST['disciplina'];
      $nota1 = $_POST['nota1'];
      $nota2 = $_POST['nota2'];
     
      $sql = $pdo->prepare("UPDATE users SET aluno=?,disciplina=?,nota1=?,nota2=? WHERE id=$id");
      $sql->execute(array($aluno,$disciplina,$nota1,$nota2));
      echo "<meta HTTP-EQUIV='refresh' CONTENT='0'>";
    }

    echo '
    
    <form method="post">
      <input type="text" name="aluno" placeholder="Aluno" value="'.$value['aluno'].'">
      <input type="text" name="disciplina" placeholder="Disciplina" value="'.$value['disciplina'].'">
      <input type="text" name="nota1" placeholder="Nota 1" value="'.$value['nota1'].'">
      <input type="text" name="nota2" placeholder="Nota 2" value="'.$value['nota2'].'">
      <input type="submit" value="Salvar" name="salvar">
    </form>
    
    ';
  }

  ?>

    <a href="read.php">voltar</a>

</body>

</html>