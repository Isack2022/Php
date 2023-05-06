<?php include('template/header.php') ?>
<h1>cadastro</h1>
<form method="POST" action="controller/cadastro-controller.php">
    
    <div>
    <label for="inputPassword5" class="form-label">Nome:</label>
        <input type="text" class="form-control"name="txtNome" placeholder="Nome">
    </div>
    <div>
        <label for="inputPassword5" class="form-label">Sobrenome:</label>
        <input type="text" class="form-control"name="txtSobrenome" placeholder="Sobrenome">
    </div>
    <div>
        <label for="inputPassword5" class="form-label">Email:</label>
        <input type="email" name="txtEmail" class="form-control" placeholder="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
    </div>
    <div>
        <label for="inputPassword5" class="form-label">Nascimento:</label>
        <input type="date"class="form-control" name="txtData">
    </div>
    <div>
        <label for="inputPassword5" class="form-label">telefone:</label>
        <input type="text"  class="form-control"name="txtTelefone" placeholder="xx-xxxxxxxxx" required pattern="[0-9]{2}-[0-9]{9}">
    </div>
    <div>
        <label for="inputPassword5" class="form-label">CPF:</label>
        <input type="text"  class="form-control"name="txtCPF" placeholder="xxxxxx-xx"required pattern="[0-9]{9}-[0-9]{2}"/>
    </div>
    <div>
        <label for="inputPassword5" class="form-label">CEP:</label>
        <input type="text" class="form-control" name="txtCEP" placeholder="xxxxx-xxx" required pattern="[0-9]{5}-[0-9]{3}"/>
    </div>
    <div>
        <label for="inputPassword5" class="form-label">Senha:</label>
        <input type="password" id="inputPassword5" class="form-control" name="txtSenha" aria-describedby="passwordHelpBlock" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" >
        <div id="passwordHelpBlock" class="form-text">
                Sua senha deve conter no Minímo 8 ou mais caracteres de pelo menos um número e uma letra uma minúscula
            </div>
    </div>
    <div>
        <input type="submit" value="Enviar"/>
    </div>   
    
</form>
<?php include('template/footer.php') ?>


