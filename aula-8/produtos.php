<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 760px; padding: 20px; }
    </style>
</head>
<?php include('template/header.php'); ?>
<section>
<h1>PRODUTOS</h1>
    <form method="POST" action="">
        <div>
            <input type="file" placeholder="Img do produto"/>
        </div>
        <div>
            <input type="text" name="" placeholder="titulo"/>
        </div>
        <div>
            <input type="text" name="" placeholder="Categoria produto"/>
        </div>
        <div>
            <input type="text" name="" placeholder="valor"/>
        </div>
        <div>
            <input type="text" name="" placeholder="descriçao"/>
        </div>
        <div>
            <input type="submit" value="enviar"/>
        </div>
    </form>
</section>
<?php include('template/footer.php'); ?>
