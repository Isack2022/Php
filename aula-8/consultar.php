<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: controller/logout.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include('template/header.php'); ?>
    <meta charset="UTF-8">
    <title>Bem vindo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Oi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bem vindo ao nosso site.</h1>
    <p>
        <a href="reset-senha.php" class="btn btn-warning">Redefina sua senha</a>
        <a href="controller/logout.php" class="btn btn-danger ml-3">Sair da conta</a>
    </p>
    <?php include('template/footer.php'); ?>
</body>
</html>