<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: gray;
            font-family: "Arial";
            font-size: 50px;    
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    //declarador o vetor
        $nota = array();
        
        $nota[0] = 9;
        $nota[1] = 9;
        $nota[2] = 7;
        $nota[3] = 4;
    //Fim da declaração

        //metodo sem laço e (NÂO PRATICO para uso profissional)
        //$media = ($nota[0]+$nota[1]+$nota[2]]+$nota[3])

        //Utilizando o laço reptição
        $i = 0;
        $soma = 0;
        //Count conta o elemento do vetor da array
        while($i < count($nota)){
            echo "A " .($i+1). " º média é de: ".$nota[$i]. "<br>";
            $soma = $soma + $nota[$i];
            $i++;
        }
        $media = $soma / count($nota);
        echo "A média é de: $media";
    ?>
</body>
</html>