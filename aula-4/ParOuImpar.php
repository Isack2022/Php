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
    //Programa para saber se o número é par ou ímpar
        //determinar se um numero eh par ou impar
        $numero = 5;
        $resto = $numero % 2;
        /* Testa se o numero eh par ou impar
         Desvio de fluxo usando if (true) e else (false)*/
        if ($resto == 0){
            print "O número $numero é par.";
        }
        else{
            print "O número $numero é ímpar.";
        }
    ?>
</body>
</html>