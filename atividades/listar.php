<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    </style>
</head>
<body>
    

    <div class="lista_atividades"> 
		<h1 class="titulo" >Lista de Atividades</h1>
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
        
            $sql = "SELECT id, nome_atv, dia, hora, tipo, email_org FROM atividade";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "- Id: " .
                    $row["id"] . 
                    "<br>" . 
                    " - Name: " . 
                    $row["nome_atv"] .
                    "<br>" . 
                    "- Data: " .
                    $row["dia"] . 
                    "<br>" .  
                    " - Hora: " .
                    $row["hora"] . 
                    "<br>" .  
                    " - Tipo de Atividade: "  .
                    $row["tipo"] .
                    "<br>" .   
                    " - Email: " . 
                    $row["email_org"] .
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