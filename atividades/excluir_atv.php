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
        <form action="excluido.php" method="post" class="form-cadastro">
            
            <h1 class="titulo">Excluir Atividade</h1>
            <label for="id_atividade" class="input">Digite o id da atividade</label>
            <input type="text" id="id_atividade"name="id_atv" class="input"></input>

            <input type="submit" value="Enviar" id="botao_enviar">

        </form>
        

    </div>

 
    
</body>
</html>