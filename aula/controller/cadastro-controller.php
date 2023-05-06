<?php
$nome = addslashes($_POST['txtNome']);
$sobrenome = addslashes($_POST['txtSobrenome']);
$telefone = addslashes($_POST['txtTelefone']);
$nascimento =  addslashes($_POST['txtData']);
$cpf = addslashes($_POST['txtCPF']);
$cep = addslashes($_POST['txtCEP']);
$email = addslashes($_POST['txtEmail']);
$senha = addslashes($_POST["txtSenha"]);
    
    include("banco.php");
    $res = $pdo->prepare("INSERT INTO cadastro(id_cliente, nome, sobrenome, nascimento, cpf, cep, email, telefone, senha) VALUES  (null,'$nome','$sobrenome','$nascimento','$cpf','$cep','$email','$telefone','$senha');");
    $res ->execute();
    header("location:../login.php");
    
?>