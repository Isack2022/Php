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
    //Programa onde o slario do funcionario ganhar 10 porceto de aumento
        $sali = 2000;
        $por = 10;
        $sal = $sali + ($sali *($por/100)); // Conta da porcetagem 
        echo "<h1> O valor do novo salário: ",$sal;
    ?>
</body>
</html>