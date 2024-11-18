<?php
include('conexao_login.php');


if(isset($_POST['nomeusuario']) || isset($_POST['senhausuario'])){

    if(strlen($_POST['nomeusuario']) == 0){
        echo "Preencha o nome de usuário.";
    }else if(strlen($_POST['senhausuario']) == 0){
        echo "Preencha o campo de senha";
    } else{
        
        $nome = $mysqli->real_escape_string($_POST['nomeusuario']);
        $senha = $mysqli->real_escape_string($_POST['senhausuario']);

        $sql_code = "SELECT * FROM  usuarios WHERE nome_usuario = '$nome' AND senha_usuario = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: ". $mysqli->error);

        $qtd = $sql_query->num_rows;

        if($qtd == 1){
            $usuario = $sql_query->fetch_assoc();
            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            
            header('Location: admin_page.php');
        }else{
            echo "Falha ao logar!! nome ou senha incorretos.";
        }

    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class= "container">
        <form action="" method="POST">
            <h2 class="container text-center">ACESSE SUA CONTA</h2>
        <div  class="container text-center">
        <div class="col-auto">
        <label class="col-form-label">Nome:</label>
        </div>
          <div class="col-auto">
        <input type="text" class="col-4" name="nomeusuario" id="box">
          </div>    
        </div>   
        <div class="container text-center">
        <div class="col-auto">
        <label class="col-form-label">Senha:</label>
        </div>
          <div class="col-auto">
        <input type="password" class="col-4" name="senhausuario" id="box">
          </div>    
          <div class="col-auto">
        <span id="passwordHelpInline" class="form-text">
          Deve conter no máximo 16 caracteres.
        </span>
          </div>
        </div>   
        <br>
         <div class="d-grid gap-2 col-4 mx-auto">
            <input type="submit" value="Entrar" class="btn btn-success" id="btn">
        </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
