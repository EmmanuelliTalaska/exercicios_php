<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cadastro/cadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="main-cadastro">
        <div class="left-cadastro">
            <h1>Realize seu cadastro<br>Preenchendo os campos ao lado</h1>
            <img src="../imagens/user.svg" alt="user" class="left-cadastro-img">
        </div>
        <form  method="post">
        <div class="right-cadastro">
            <div class="card-cadastro">
                <h1>CADASTRO</h1>
                <form  method="post">
                    <div class="textfield">
                        <label for="nome">Usuário</label>
                        <input type="text" name="nome" placeholder="Nome do usuário">
                    </div>
                    <div class="textfield">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" placeholder="E-mail">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>

                    <button class="btn-cadastro" type="submit" name="cad">Cadastrar</button>
                    <div class="login">
                        <label for="login">Já cadastrado? <a href="../login/index.php">Login</a></label>
 
    </div>
    </form>
    </div>
    </div>
    </div>
    <?php
    if (isset($_POST['cad'])) {

        try {
            $conexao = new PDO("mysql:host=localhost; dbname=bdprojetofinal", "root", "");
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexao->exec("set names utf8");
        } catch (PDOException $erro) {
            echo "Erro na conexão:" . $erro->getMessage();
        }

        $nome = (isset($_POST["nome"]) && $_POST["nome"] != null) ? $_POST["nome"] : "";
        $email = (isset($_POST["email"]) && $_POST["email"] != null) ? $_POST["email"] : "";
        $senha = (isset($_POST["senha"]) && $_POST["senha"] != null) ? $_POST["senha"] : "";

        if (!empty($nome) && !empty($email) && !empty($senha)) {
            $stmt = $conexao->prepare("INSERT INTO cadastro (nome, email, senha) VALUES (?, ?, ?)");
            $stmt->bindParam(1, $nome);
            $stmt->bindParam(2, $email);
            $stmt->bindParam(3, $senha);
            $stmt->execute();

            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Dados cadastrados com sucesso!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            header('Location: ../login/index.php');
        }else{
            header('Location: ../cadastro/cadastro.php');
        }
    }
    ?>

</body>

</html>