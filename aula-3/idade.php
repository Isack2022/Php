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
        //Programa que de acordo com sua idade vai falar uma frase usando devio de fluxo if e else
        $idade = 18;
        //Devio de fluxo com if(true) e com else(False)
        if ($idade >=2){
            echo "<h1> Bebê </h1>";
        }
        else if ($idade >=18){
            echo "<h1> Maior de idade </h1>";
        }
        else {
            echo "<h1> Menor de idade</h1>";
        }
    ?>
</body>
</html>