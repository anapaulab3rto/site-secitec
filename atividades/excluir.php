
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

            $id = $_POST['id_atv'];
            $conexao = new mysqli('localhost','root','');

            if (!$conexao){
                die('Não foi possível conectar' .  mysql_error());
            }

            $conexao->select_db("secitec");

            // $query = "INSERT INTO `secitec`.`participante`(`nome`,`email`) VALUES ('" . $nome_pessoa . "','" .  $email_pessoa . "');";

            $query = "DELETE FROM atividade WHERE id = $id ";


            if($conexao->query($query) === TRUE){

                echo "Atividade excluida com sucesso!";

            }else{
                echo "Erro: " . mysql_error();
            }

            $conexao->close();

        ?>
        

    </div>

 
    
</body>
</html>






