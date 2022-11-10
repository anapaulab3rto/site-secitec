<?php

	include '../config/conexao.php';
	if(isset($_POST['cadastro_atividade'])){
		
		$nome_atividade = $_POST['nome_atividade'];
        $data_atividade = $_POST['data_atividade'];
        $hora_atividade = $_POST['hora_atividade'];
        $tipo_atividade = $_POST['tipo_atividade'];
        $lugar_atividade = $_POST['lugar_atividade'];

		try{

			$insertAtividade = "INSERT INTO atividades (nome) VALUES ('$nome_atividade')";

			$statement = $bd->prepare($insertAtividade);

			$statement->execute();

			$bd = null;

            header('location:../areaParticipante.html');
            

		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	include 'cadastrar.html';

?>



