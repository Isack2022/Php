<?php
        $servidor ="locahost";
        $banco ="php";
        $usuario = "root";
        $senha= "";

        $pdo = new PDO("mysql:host=$servidor,bdname=$banco",$usuario,$senha);
?>