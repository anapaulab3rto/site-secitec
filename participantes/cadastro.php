<?php


if (isset($_POST['cadastro_participante'])) {

	$nome_participante = $_POST['nome_participante'];
	$email_participante = $_POST['email_participante'];
	$telefone_participante = $_POST['telefone_participante'];
	$datanasc_participante = $_POST['datanasc_participante'];
	$usuario_participante = $_POST['usuario_participante'];
	$senha_participante = password_hash($_POST['senha_participante'], PASSWORD_DEFAULT);

	include '../conexao.php';

	try {

		//Inicia uma transação, visto que serão realizadas duas operações codependentes de inserção em tabelas distintas,
		//Se houver alguma falha em qualquer das operações, tudo é desfeito
		//Caso contrário, os dados serão efetivados (commit)
		$bd->beginTransaction();
	
		//PRIMEIRA OPERAÇÃO DE INSERÇÃO
		//Persiste os dados do participante na tabela PARTICIPANTE do banco de dados

		//O SQL é preparado pela instância da classe PDO
		$insertParticipante = "INSERT INTO participante (nome,email,telefone,datanasc) VALUES (?,?,?,?)";
		$statement = $bd->prepare($insertParticipante);

		//A operação DML, o insert, é executado no banco
		//Os dados são passados como um array e neste momento as interrogações da string SQL são substituídas na ordem
		$statement->execute(array($nome_participante, $email_participante, $telefone_participante, $datanasc_participante));

		//Essa função recupera o último ID cadastrado no BD
		//Assim, poderemos criar o usuário associando ao participante cadastrado
		//O ID recuperado será inserido como chave estrangeira na tabela USUÁRIO
		$participante_id = $bd->lastInsertId();



		//SEGUNDA OPERAÇÃO DE INSERÇÃO
		//Persiste os dados do usuário na tabela USUÁRIO do banco de dados

		//O SQL é preparado pela instância da classe PDO
		$insertUsuario = "INSERT INTO usuario (usuario,senha,participante_id) VALUES (?,?,?)";
		$statement = $bd->prepare($insertUsuario);

		//A operação DML, o inserte, é executado no banco
		//Os dados são passados como um array e neste mommento as interrogações da string SQL são substituídas
		$statement->execute(array($usuario_participante,$senha_participante,$participante_id));

		//Os dados são efetivados no BD
		$bd->commit();

		//A conexão com o banco é encerrada
		$bd = null;

		//Uma vez que o usuário foi criado, é criada uma sessão para ele
		//O site é direcionado para a área de participante, cujo acesso é exclusivo para participante logado
		include 'sessao.php';
		criarSessao($usuario_participante);

	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}

//Inclue o formulário, caso o $_POST['cadastro_participante'] ainda não tenha valor, ou seja, o formulário ainda não foi enviado
//

include 'cadastro.html';
?>

<!-- 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>


    

    <div class="form"> 
		<?php

			// $nome = $_POST['nome_participante'];
			// $email = $_POST['email_participante'];
            // $telefone = $_POST['telefone_participante'];
			// $datanasc = $_POST['datanasc_participante'];

            // $username = $_POST['usuario_participante'];
			// $senha = password_hash($_POST['senha_participante'], PASSWORD_DEFAULT);
			// $conexao = new mysqli('localhost','ifpb','ifpb');

			// if (!$conexao){
			// 	die('Não foi possível conectar' .  mysql_error());
			// }

			// $conexao->select_db("secitec");


			// $query1 = "INSERT INTO secitec participante ( nome , email ,  telefone ,  datanasc) VALUES ('$nome','$email','$telefone','$datanasc','$username');";




            // $query2 = "INSERT INTO  secitec usuario ( username , senha ) VALUES (' $username ','  $senha ');";
            

			// if($conexao->query($query1) === TRUE and $conexao->query($query2) === TRUE){

			// 	echo "Inscrição realizada com sucesso!";
			// 	header('location:../areaParticipante.html');

			// }else{
			// 	echo "Erro: " . mysql_error();
			// 	header('location:cadastro.html');
			// }

            

			// $conexao->close();

		?>







        

    </div> 

 
    
</body>
</html>-->


