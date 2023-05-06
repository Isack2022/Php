<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de dados</title>
</head>
<body>
    <?php
        include("conexão.php");
    ?>
    <!--HTML-->
   <form action="conexão.php" method="POST">
       <label>Produto:</label> <br>
       <input type="text" id="produto" name="valor"> <br>
       <label>Valor:</label> <br>
       <input type="number" id="valor" name="valor"> <br> <br>
       <input type="submit" value="Enviar">
   </form>
   <select>
    <?php
        $stmt = $pdo->prepare("select * from tbproduto");
        $stmt ->execute();

        while($row = $stmt->fetch(PDO::FETCH_BOTH)){
            echo "<p>"
            echo $row[0];
            echo $row[1];
            echo $row[2];
            echo "</p>"
        }
   ?>
   </select>
</body>
</html>