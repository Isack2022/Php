<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imagem/download.ico" type="image/x-icon">
    <title>Etec Camargo Aranha</title>
</head>
<body>
    <header>
        <img src="imagem/logo.png"  alt="Etec Professor Carmago Aranha" id="menu">
    </header>
    <form class="formu">
        <p>Obrigado por responder</p>
        <a href="index.php">Voltar a pagina de votação</a>
        <a href="salvar.php">página</a>
    </form>
<?php
    $escolhaCurso = $_POST['rCurso'];
    $nome = $_POST['nome'];
    
    include("conexao.php");
    $stmt = $pdo->prepare("insert Into tbidentificacao VALUES (null,'$escolhaCurso','$nome');");
	$stmt ->execute();
    header("location:index.php");
?>
</body>
</html>
