<?php include('template/header.php'); ?>
<form>
    <?php 
        echo "<h1> Informações dos clientes: </h1>";
    ?>
    <section>	
	<?php
        include("controller/banco.php");
		$stmt = $pdo->prepare("SELECT * FROM cadastro WHERE 1;");
		$stmt ->execute();
        $resultado = $stmt ->fetch(PDO::FETCH_ASSOC);
      
	?>
    </section>	
</form>
<?php include('template/footer.php'); ?>