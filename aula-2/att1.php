<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Programa que mostrar o Trimentre de acordo com mês
        $mes = 10;
         //Devio de fluxo com if(true) e com else(False)
        if($mes == 1 || $mes == 2 || $mes == 3){
            echo"<h1> 1º Trismentre </h1>";
        }
        else if($mes == 4 || $mes == 5 || $mes == 6){
            echo"<h1> 2º Trismentre </h1>";
        }
        else if($mes == 7 || $mes == 8 || $mes == 9){
            echo"<h1> 3º Trismentre </h1>";
        }
        else if($mes == 10 || $mes == 11 || $mes == 12){
            echo"<h1> 4º Trismentre </h1>";
        }
    ?>
</body>
</html>