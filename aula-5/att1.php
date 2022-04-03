<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Document</title>
</head>
<body>
    <h1>Cadastra Usuário</h1>
    <form class="box"action="att1p2.php" method="POST">
        <label> Nome: </label> 
        <input type="text" name="nome" placeholder="Nome completo"><br> <br>
        <label> Nascimento: </label> 
        <input type="date" name="nascimento"> <br> <br>
        <label>Estado civil </label>
        <select name="estado" id="estado">
            <optgroup label="Estado civil">
                <option value="Solteiro">Solteiro</option>
                <option value="Casado">Casado</option>
                <option value="Separado">Separado</option>
                <option value="Dirvociado">Divorciado</option>
                <option value="Víuvo">Víuvo</option>
                <option value="Não informar">Não informar</option>
            </optgroup>
        </select>
        <br>
        <br>
        <label> Gosta de:</label>
        <br>
        <br>
        <label>
            <input type="radio" name="estudar" id="estudar" value="Estudar">Estudar
        </label>
        <label>
            <input type="radio" name="trabalhar" id="trabalhar" value="Trabalhar">Trabalhar
        </label><br>
        <br>
        <input type="submit" value="Cadastra-se">
    </form>
</body>
</html>