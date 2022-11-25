<?php
session_start();

require '../conexao/init.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../login/login.css">
    <title>Login</title>
</head>

<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça login<br>E encontre um universo de gatinhos</h1>
            <img src="../imagens/cat.svg" alt="cat" class="left-login-img">
        </div>
        <form action="login.php" method="post">
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                    <div class="textfield">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" placeholder="E-mail">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                    <button class="btn-login" input="submit">Login</button>
                    <div class="registrar">
                        <label for="registro">Ainda não tem uma conta? <a href="../cadastro/cadastro.php">Cadastrar</a></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>