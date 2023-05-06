<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imagem/download.ico" type="image/x-icon">
    <title>Etec Professor Carmago Aranha</title>
</head>
<body>
    <header>
        <img src="imagem/logo.png"  alt="Etec Professor Carmago Aranha" id="menu">
    </header>
    <form class="formu">
    <?php 
        include("conexao.php");
        echo "<h1> Todas as escolhas de Cursos </h1>";
    ?>
    <section>	
	<?php
		$stmt = $pdo->prepare("select * from `tbidentificacao`");	
		$stmt ->execute();
		while($row = $stmt ->fetch(PDO::FETCH_BOTH)){							
			echo "<td> $row[0] </td>";
			echo "<td> $row[1] </td>";
            echo "<td> $row[2] </td>";		
			echo "<br/>";			
		}	
	?>
    </section>	
    </form>
</body>
</html>
