<link rel="stylesheet" href="css/login.css">
<?php include('template/header.php'); ?>
    <form  action="controller/login-controller.php" method="POST">

        <h1>Entrar</h1> <br> <br>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" name="txtNome" placeholder="name@example.com">
            <label for="floatingInput">Email </label>
        </div>
    
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword"  name="txtSenha" placeholder="Senha" >
            <label for="floatingPassword">Senha</label>
        </div>
        <div id="passwordHelpBlock" class="form-text">
            <a href="cadastro.php" style="color:black;">Ainda não é cadastrado?<strong>Cadastre-se!</strong></a>
        </div>
        <input type="submit"  value="Continuar">
    </forrm>
<?php include('template/footer.php'); ?>

