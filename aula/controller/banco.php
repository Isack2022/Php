<?php
   $servidor="localhost";
   $banco="aula";
   $usuario="root";
   $senha="";
   
   global $pdo;
try{
    

	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
}
catch (PDOException $mens){
    echo "Erro com banco de dados: ".$mens->getMessage();
}
catch (Exception $mens){
    echo "Erro generico: ".$mens->getMessage();
}
			
?>