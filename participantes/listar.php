
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
            background-image: url("back.jpg");
            background-size: cover;
            background-repeat: no-repeat;
			display: flex;
			align-items: center;
            justify-content: center;
            width: 95vw;
            height: 90vh;
            
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
			padding: 5%;
            
           
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
			margin: 15pt; 
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
        .lista_participantes{
            font-family: 'Philosopher', sans-serif;
			background: #ffffff;
			border-radius: 15pt;
			display: flex; 
			flex-direction: column;
			gap: 22PT;
			margin: 10pt;
			padding: 5%; 

        }
        

    </style>
</head>
<body>
    

    <div class="lista_participantes"> 
		<h1 class="titulo" >Lista de Participantes</h1>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "secitec";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT id, nome, email FROM participante";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "- Id: " .
					$row["id"] .
					"<br>" . 
					" - Name: "  .
					$row["nome"] . 
					"<br>" .  
					" - Email: "  .
					$row["email"] . 
					"<br>" . 
					"<br>";
				}
			} else {
				echo "0 results";
			}
			$conn->close();
		?>
        
        
        
        

    </div>

 
    
</body>
</html>


