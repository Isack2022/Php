<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php 
    //Continuação do programa
        $n1 = filter_input(INPUT_POST, "n1");//Recebendo os dados do arquivo calculo.php
        $n2 = filter_input(INPUT_POST, "n2");//Recebendo os dados do arquivo calculo.php

        $total = $n1 + $n2;
        echo "$total";
    ?>
</body>
</html>