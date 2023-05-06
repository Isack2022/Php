<?php
    session_start();    
    $login = $_POST["txtNome"];
    $pass = $_POST["txtSenha"];
    

    if($login="Isack" && $pass="123"){
        $_SESSION["autorizacao"] = true;
        header("Location:produto.php");
    }
    else{
        $_SESSION["autorizacao"] = false;
        unset($_SESSION["autorizacao"]);
        session_destroy();
        header("Location:index.php");
    }
?>