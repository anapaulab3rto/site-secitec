
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    

    <div class="form"> 
		<?php

			$nome = $_POST['nome_participante'];
			$email = $_POST['email_participante'];
            $telefone = $_POST['telefone_participante'];
			$datanasc = $_POST['datanasc_participante'];

            $username = $_POST['usuario_participante'];
			$senha = $_POST['senha_participante'];
			$conexao = new mysqli('localhost','ifpb','ifpb');

			if (!$conexao){
				die('Não foi possível conectar' .  mysql_error());
			}

			$conexao->select_db("secitec");

			$senha = password_hash($senha, PASSWORD_DEFAULT);
            

            $query2 = "INSERT INTO `secitec`.`usuario`(`username`,`senha`) VALUES ('" . $username . "','" .  $senha . "');";
		

			$query1 = "INSERT INTO `secitec`.`participante`(`nome`,`email`, `telefone`, `datanasc`,`username`) VALUES ('" . $nome . "','" .  $email . "','" .  $telefone . "','" .  $datanasc . "','" .  $username . "');";

            

			if($conexao->query($query2) === TRUE and $conexao->query($query1) === TRUE){

				echo "Inscrição realizada com sucesso!";
				header('location:../areaParticipante.html');

			}else{
				echo "Erro: " . mysql_error();
				header('location:cadastro.html');
			}

            

			$conexao->close();

		?>


        

    </div>

 
    
</body>
</html>


