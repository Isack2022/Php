<?php include("controller/contato-controller.php")?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 760px; padding: 20px; }
    </style>
</head>
<?php include("template/header.php"); ?>
<div class="wrapper">
        <h2>Contato</h2>
        <p>Por favor, preencha este formulário para enviar a sua reclamação.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Assunto</label>
                <input type="text" name="assunto" class="form-control <?php echo (!empty($assunto_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $assunto; ?>">
                <span class="invalid-feedback"><?php echo $assunto_err; ?></span>
            </div>
            <div class="form-group">
                <label>Mensagem</label>
                <textarea name="msg" class="form-control <?php echo (!empty($msg_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $msg; ?>"> </textarea>
                <span class="invalid-feedback"><?php echo $msg_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Enviar">
                <input type="reset" class="btn btn-secondary ml-2" value="Apagar Dados">
            </div>
<?php include("template/footer.php")?>
</body>
</html>