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
    <form action="resultado.php" method="POST">
        <p>Digite um número:</p> <input type="text" name="n1">
        <br>
        <p>Digite outro número:</p> <input type="text" name="n2">
        <br>
        <br>
        <input type="submit" value="calculo">

        <?php
        //Programa onde o usuário manda dois valores e calcular em outra página
            $total = $_POST["n1"] + $_POST["n2"];
        ?>
    </form>
</body>
</html>