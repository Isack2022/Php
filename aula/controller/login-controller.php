<?php
if(isset($_POST['txtEmail']) && !empty($_POST['txtEmail']) && isset($_POST['txtSenha']) && !empty($_POST['txtSenha'])){

    require 'banco.php';
    require 'usuario-controller.php';

    $u = new Usuario();

    $email = addslashes($_POST['txtEmail']);
    $senha = addslashes($_POST['txtSenha']);

}else{
    header("location:../login.php");
}

?>