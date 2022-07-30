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
            margin: 10%;
            display: flex;
            flex-direction: row;
            gap: 20%;
            
           
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
            padding: 5%;

        }
        #botao_enviar {
            font-family: 'Philosopher', sans-serif;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100pt;
            height: 30pt;
            margin-top: 15pt;
            border-radius: 10pt;
            background-color: #7fda7f;
            border-color: transparent;
        }
        

    </style>
</head>
<body>
    

    <div class="form">
        <img src="logo.png" alt="logo secitec" width="550pt" height="550pt">    
       
        
        <form action="enviado.php" method="post" id="form-cadastro">

                  
            <h2 class="title-form">Formulário de inscrição</h2>
            <label for="input_nome_pessoa" class="input">Nome</label>
            <input type="text" id="input_nome_pessoa" class="input" name="nome_pessoa">
            <label for="input_email_pessoa" class="input">Email</label>
            <input type="text" id="input_email_pessoa" class="input" name="email_pessoa">
            <input type="submit" value="Enviar" id="botao_enviar">

            
            
        </form>


    </div>

 
    
</body>
</html>