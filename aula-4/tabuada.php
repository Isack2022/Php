<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tabuada.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <p>Digite um número:</p>
        <input type="text" name="n1" placeholder="Escolhe um número">
        <br>
        <br>
        <input type="submit" value="Mostrar">
    </form>
    <?php
    //Programa onde o usuário digita um número e faz a tabuada 
        $vn1 = (int) $_POST["n1"];
        if ($vn1 > 0 and $n1 < 11){
            for($i = 1; $i <= 10; $i++){
                echo "$i x $vn1 = ".($i*$vn1). "<br>";
            }
        }
    ?>
</body>
</html>