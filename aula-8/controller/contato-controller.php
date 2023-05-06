<?php
// Incluir arquivo de configuração
require_once "controller/banco.php";
 
// Defina variáveis e inicialize com valores vazios
$username = $email = $assunto = $msg = "";
$username_err = $email_err = $assunto_err = $msg_err = "";
 
// Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validar nome de usuário
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor coloque o nome.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "O nome de usuário pode conter apenas letras, números e sublinhados.";
    } else{
        // Prepare uma declaração selecionada
        $sql = "SELECT id FROM contato WHERE nome = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // Definir parâmetros
            $param_username = trim($_POST["username"]);
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                $username = trim($_POST["username"]);
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // Fechar declaração
            unset($stmt);
        }
    }

     // Validar o email do usuario
     if(empty(trim($_POST["email"]))){
        $email_err = "Por favor coloque um email.";
    } else  if(!preg_match('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}+$/', trim($_POST["email"]))){
        $email_err = "O email precisa do nome + @ + exemplo.com";
    } else{
        // Prepare uma declaração selecionada
        $sql = "SELECT id FROM contato WHERE email = :email";
        
        if($stmt = $pdo->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            
            // Definir parâmetros
            $param_email = trim($_POST["email"]);
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                  $email = trim($_POST["email"]);
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // Fechar declaração
            unset($stmt);
        }
    }
    // Validar nome de usuário
    if(empty(trim($_POST["assunto"]))){
        $assunto_err = "Por favor coloque o motivo.";
    }else{
        // Prepare uma declaração selecionada
        $sql = "SELECT id FROM contato WHERE assunto = :assunto";
        
        if($stmt = $pdo->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":assunto", $param_assunto, PDO::PARAM_STR);
            
            // Definir parâmetros
            $param_assunto = trim($_POST["assunto"]);
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                $assunto = trim($_POST["assunto"]);
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // Fechar declaração
            unset($stmt);
        }
    }
        // Validar nome de usuário
        if(empty(trim($_POST["msg"]))){
            $msg_err = "Por favor coloque a sua mensagem.";
        }else{
            // Prepare uma declaração selecionada
            $sql = "SELECT id FROM contato WHERE messagem = :msg";
            
            if($stmt = $pdo->prepare($sql)){
                // Vincule as variáveis à instrução preparada como parâmetros
                $stmt->bindParam(":msg", $param_msg, PDO::PARAM_STR);
                
                // Definir parâmetros
                $param_msg = trim($_POST["msg"]);
                
                // Tente executar a declaração preparada
                if($stmt->execute()){
                    $msg = trim($_POST["msg"]);
                } else{
                    echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
                }
    
                // Fechar declaração
                unset($stmt);
            }
        }

    // Verifique os erros de entrada antes de inserir no banco de dados
    if(empty($username_err) && empty($email_err) && empty($assunto_err) && empty($msg_err)){
        
        // Prepare uma declaração de inserção
        $sql = "INSERT INTO contato (nome, email, assunto,messagem) VALUES (:username,:email ,:assunto, :msg)";
         
        if($stmt = $pdo->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            $stmt->bindParam(":assunto", $param_assunto, PDO::PARAM_STR);
            $stmt->bindParam(":msg", $param_msg, PDO::PARAM_STR);
            
            // Definir parâmetros
            $param_username = $username;
            $param_email = $email;
            $param_assunto = $assunto;
            $param_msg = $msg;

            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                // Redirecionar para a página inicial
                header("location:index.php");
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // Fechar declaração
            unset($stmt);
        }
    }
    // Fechar conexão
    unset($pdo);
}
?>