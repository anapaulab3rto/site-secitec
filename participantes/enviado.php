<?php



    $senha = "123abc";

    echo $senha;

    echo "</br>";

    $senha = password_hash($senha, PASSWORD_DEFAULT);

    echo $senha;
            
?>