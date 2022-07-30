<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="enviado.php" method="post">
        <label for="input_nome_pessoa">Nome</label>
        <input type="text" id="input_nome_pessoa" name="nome_pessoa">
        <label for="input_email_pessoa">Email</label>
        <input type="email" id="input_email_pessoa" name="email_pessoa">

        <input type="submit" name="botao_enviar" value="enviar">
    </form>
</body>
</html>