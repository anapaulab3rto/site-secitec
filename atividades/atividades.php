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
            
            
        }
        .form {
            background: #ffffff;
            border-radius: 15pt;
            
            display: flex;
            flex-direction: row;
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
        #form-cadastro {

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
        

    </style>
</head>
<body>
    

    <div class="form"> 
        
        
        
        <form action="cadastro_atv.php" method="post" id="form-cadastro">
        <img src="logo.png" alt="logo secitec" width="550pt" height="550pt">
        <h2 class="title-form">Cadastro de atividades</h2>

            <div class="conteiner">
                <label for="input_nome_atv" class="input">Nome da Atividade</label>
                <input type="text" id="input_nome_atv" class="input" name="nome_atv">

                <label for="input_dia" class="input">Data</label>
                <input type="text" id="input_dia" class="input" name="dia">                
            </div>

            <div class="conteiner">
                <label for="input_hora" class="input">Horário</label>
                <input type="text" id="input_hora" class="input" name="hora">

                <label for="input_tipo" class="input">Tipo</label>
                <input type="text" id="input_tipo" class="input" name="tipo">
            </div>

            <div class="conteiner">
                <label for="input_duracao" class="input">Duração</label>
                <input type="text" id="input_duracao" class="input" name="duracao">

                <label for="input_email_org" class="input">Email do Organizador</label>
                <input type="text" id="input_email_org" class="input" name="email_org">
            </div>
            <input type="submit" value="Enviar" id="botao_enviar">
                             
        </form>
        

    </div>

 
    
</body>
</html>