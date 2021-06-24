<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Alunos</title>
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

?>

<body>

    <style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    </style>

    <table style="width:100%">
        <tr>
            <th>Aluno</th>
            <th>Disciplina</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Ação</th>
        </tr>

        <?php 

            $sql = $pdo->prepare("SELECT * FROM users");
            $sql->execute();
            $info = $sql->fetchAll();

            foreach ($info as $key => $value) {  
              $id = $value['id'];
              if(isset($POST['excluir'.$id])){
                $sql = $pdo->prepare("DELETE FROM users WHERE id=?");
                $sql->execute(array($id));
                echo "<meta HTTP-EQUIV='refresh' CONTENT='0'>";
              }
              if(isset($POST['editar'.$id])){
                echo '<script>window.location = "update.php?id='.$id.'";</script>';
              }
                echo '
                  <tr>
                    <td>'.$value['aluno'].'</td>
                    <td>'.$value['disciplina'].'</td>
                    <td>'.$value['nota1'].'</td>
                    <td>'.$value['nota2'].'</td>
                    <td><form method="post">
                      <input type="submit" name="editar_'.$id.'" value="Editar">
                      <input type="submit" name="excluir_'.$id.'" value="Excluir">
                    </form></td>
                  </tr>
                ';
            }

            ?>

    </table>
    <a href="../">Voltar</a>
</body>

</html>