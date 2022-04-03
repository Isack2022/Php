<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Programa que vc escolher o número do mês
        $mes = 1; //Varivel
        switch ($mes){// Switch = caso 
            case 1:
                echo "<h1> Janeiro</h1>";
            break;
            case 2:
                echo "<h1> Fevereiro </h1>";
            break;
            case 3:
                echo "<h1> Março </h1>";
            break;
            case 4:
                echo "<h1> Abril </h1>";
            break;
            case 5:
                echo "<h1> Maio </h1>";
            break;
            case 6:
                echo "<h1> Junho </h1>";
            break;
            case 7:
                echo "<h1> Julho </h1>";
            break;
            case 8:
                echo "<h1> Agosto </h1>";
            break;
            case 9:
                echo "<h1> Setembro </h1>";
            break;
            case 10:
                echo "<h1> Outubro </h1>";
            break;
            case 11:
                echo "<h1> Novembro </h1>";
            break;
            case 12:
                echo "<h1> Dezembro </h1>";
            break;
            default://Caso não tiver nenhuma acontece isso é praticame um else
                echo"<h1> Não exitir esse mês </h1>";
            }
    ?>
</body>
</html>