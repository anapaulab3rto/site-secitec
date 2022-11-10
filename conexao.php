<?php
    $servername = "localhost";
    $username = "ifpb";
    $password = "ifpb";
    $dbname = "secitec";

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=secitec', $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare('INSERT INTO usuario (username, senha) VALUES("ana", "12345678")');

        echo $stmt->rowCount();
    } 

    catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

?>