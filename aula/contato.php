<?php include('template/header.php'); ?>

<h1>CONTATO</h1>
<section>
    <form method="post" action="controller/contato-controller.php">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="txtNome" id="exampleFormControlInput1" placeholder="Nome Completo" >
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email:</label>
            <input type="email" class="form-control" name="txtEmail" id="exampleFormControlInput1" placeholder="nome@exemplo.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Assunto:</label>
            <input type="text" class="form-control" name="txtAssunto" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Mensagem:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div>
        <input type="submit" value="Enviar"/>
        </div>   
    </form>
</section>

<?php include('template/footer.php'); ?>
