<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;1,700&display=swap');
        body {
            position: relative;
            /* adicionando imagem de fundo */
           
            background-image: url("back.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            padding: 10%;
        }
            
        .form {
            background: #ffffff;
            border-radius: 15pt;
            
            display: flex;
            flex-direction: column;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-inline: 32%;
			font-size: 35pt;
			padding: 2%;
            
           
        }
        .input {
            font-family: 'Philosopher', sans-serif;
            margin: 10pt;
            border-radius: 10pt;
            height: 18pt;
            padding: 4pt;
           
            
        }
        .titulo {
            font-family: 'Philosopher', sans-serif;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .title-form {
            font-family: 'Philosopher', sans-serif;
    
            font-size: 25pt;
            margin: 10pt;
            border-radius: 10pt;
            height: 18pt;
            padding: 4pt;
        }
        .form-cadastro {

            display: flex;
            flex-direction: column;
            

        }
        #botao_enviar {
            font-family: 'Philosopher', sans-serif;
            width: 100pt;
            height: 30pt;
            border-radius: 10pt;
            background-color: #7fda7f;
            border-color: transparent;
            margin: 20pt;
        }
        .conteiner {
            display: flex;
            flex-direction: column;
        }
        .lista_participantes{
            font-family: 'Philosopher', sans-serif;
        }
        

    </style>
</head>
<body>
    

    <div class="form"> 
        <?php

            $nome_atv = $_POST['nome_atv'];	
            $dia = $_POST['dia'];
            $hora = $_POST['hora'];
            $tipo = $_POST['tipo'];
            $email_org = $_POST['email_org'];

            $conexao = new mysqli('localhost','root','');

            if (!$conexao){
                die('Não foi possível conectar' .  mysql_error());
            }

            $conexao->select_db("secitec");

            $query = "INSERT INTO `secitec`.`atividade`(`nome_atv`,`dia`, `hora`, `tipo`, `email_org`) VALUES ('" . $nome_atv . "','" .  $dia. "','" .  $hora. "','" .  $tipo. "','" .  $email_org . "');";




            if($conexao->query($query) === TRUE){

                echo "Atividade cadastada com sucesso!";

            }else{
                echo "Erro: " . mysql_error();
            }

            $conexao->close();

        ?>
        

    </div>

 
    
</body>
</html>


