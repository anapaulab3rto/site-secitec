<?php

	session_start();
	
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	$servername = "localhost";
	$username = "ifpb";
	$password = "ifpb";
	$dbname = "secitec";

	
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT usuario, senha FROM usuario WHERE usuario = '$login' AND senha = '$senha'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {

		$_SESSION['usuario'] = $login;
		$_SESSION['senha'] = $senha;
		header('location:index.html');
			
	}
	else {
		echo "0 results";
		unset ($_SESSION['usuario']);
		unset ($_SESSION['senha']);
		header('location:login.html');
	}
	$conn->close();
?>

