<?php
$nome = addslashes($_POST['txtNome']);
$email = addslashes($_POST['txtEmail']);
$assunto = addslashes($_POST['txtAssunto']);
$mensagem = addslashes($_POST['txtMsg']);

    include("banco.php");
    $res = $pdo->prepare("INSERT INTO contato (nome, email, Assunto, mensagem) VALUES ('$nome','$email','$assunto','$mensagem');");
    $res ->execute();
    header("location:../index.php");
?>