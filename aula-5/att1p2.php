<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/final.css">
    <title>Document</title>
</head>
<body>
<?php 
    //Continuação do programa att1.html
    $nome = filter_input(INPUT_POST, "nome");//Recebendo os dados do arquivo 
    $nascimento = filter_input(INPUT_POST, "nascimento");//Recebendo os dados do arquivo 
    $estado = filter_input(INPUT_POST, "estado");
    $gosta = filter_input(INPUT_POST, "estudar");
        echo "O seu nome é $nome <br> Você nasceu: $nascimento <br> Seu estado civil: $estado <br> Você gosta: $gosta";
    ?>
</body>
</html>
