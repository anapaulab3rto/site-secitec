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
           
            background-image: url("atividades/back.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            
        }
        .form {
            background: #ffffff;
            border-radius: 15pt;
            margin: 5%;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2%;
            width: 30%;
            
           
        }
        .input {

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
            text-decoration: none;
            color: #000000
        }
        .titulo-1 {
            font-family: 'Philosopher', sans-serif;
            display: block;
            margin-left: auto;
            margin-right: auto;
            font-size: 35pt;
        }
        .title-form {
            font-family: 'Philosopher', sans-serif;
    
            font-size: 45pt;
            margin: 10pt;
            border-radius: 10pt;
            height: 18pt;
            padding: 4pt;
        }
        #form-cadastro {

            display: flex;
            flex-direction: column;
            padding: 5%;

        }
        .botao_enviar {
            font-family: 'Philosopher', sans-serif;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 125pt;
            height: 35pt;
            margin-top: 15pt;
            border-radius: 10pt;
            background-color: #7fda7f;
            border-color: transparent;
            text-decoration: none;
            color: #ffffff;
        }
        .conteiner {

            margin-top: 20pt;
        }

    </style>
</head>
<body>
    

    <div class="form"> 
        <h1 class="titulo-1">Menu Principal</h1>
       
        <div class="conteiner">
            <button class="botao_enviar"><a href="atividades/atividades.php" class="titulo">Cadastrar Atividades</a></button>
            <button class="botao_enviar"><a href="atividades/listar_atv.php" class="titulo">Listar Atividades</a></button>
            <button class="botao_enviar"><a href="atividades/excluir_atv.php" class="titulo">Excluir Atividades</a></button>

        </div>
        <div class="conteiner">

            <button class="botao_enviar"><a href="participante/participante.php" class="titulo">Cadastrar Participantes</a></button>                
            <button class="botao_enviar"><a href="participante/listar.php" class="titulo">Listar participantes</a></button>
            <button class="botao_enviar"><a href="participante/excluir_par.php" class="titulo">Excluir Participantes</a></button>


        </div>
        
      
        
    </div>

 
    
</body>
</html>